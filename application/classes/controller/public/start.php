<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Start extends Controller_Public {

	public function action_index()
	{

	}

	public function action_test_email()
	{
		$lead = \Kacela::find_one('lead', \Kacela::criteria()->equals('leads.id', '13'));

		$header = \View::factory('email/_header')
			->set('title', 'Test Send');
		$footer = \View::factory('email/_footer');
		$email_content = \View::factory('email/new_lead')
			->set('lead', $lead);

		$message = \View::factory('email/_template')
			->bind('header', $header)
			->bind('footer', $footer)
			->bind('content', $email_content);

		// Send the email
		$email = \Email::factory('Test Email')
			->to('jeff.neslen@matrix42.com')
			->from('info@matrix42.com')
			->message($message->render(), 'text/html')
			->send();
	}

	public function action_test_error()
	{
		echo $ghjlj;
	}

	public function action_insert_partners()
	{
		$temp_partners = \Kacela::find_all('temp_partner');

		//exit(\Debug::vars($temp_partners));

		foreach($temp_partners as $partner)
		{
			$partner_check = \Kacela::find_one('partner', \Kacela::criteria()->equals('email', $partner->email));
			//exit(\Debug::vars($partner_check->id));

			if($partner_check->id)
			{
				$new_partner = $partner_check;
				$second = true;
			}
			else
			{
				$second = false;
				$new_partner = new Darth\Model\Partner();
				// Generate the temp password
				$temp_password = \Text::random();
				$hash_password = \Bonafide::instance()->hash($temp_password);
				$new_partner->password = $hash_password;

				// Set the user variables
				$new_partner->full_name = $partner->company_name;
				$new_partner->email = trim($partner->email);
				$new_partner->role = 'partner';

				// Set Partner variables
				$new_partner->type = 'reseller';
				$new_partner->company_name = $partner->company_name;
				$new_partner->description = $partner->description;
				$new_partner->logo = $partner->logo;
				$new_partner->website = trim($partner->website);
				$new_partner->certified = $partner->certified;

				$new_partner->save();
			}

			$new_address = new \Darth\Model\Address();
			$new_address->type = 'business';
			$new_address->user_id = $new_partner->id;
			$new_address->address1 = $partner->address1;
			$new_address->city = $partner->city;
			$new_address->state_id = $partner->state_id;
			$new_address->postal = $partner->postal;
			$new_address->country_id = $partner->country_id;

			$new_address->save();

			if($partner->number)
			{
				if($partner->country_id == 'US' OR $partner->country_id == 'CA')
				{
					$format = 'north_america';
				}
				else
				{
					$format = 'europe';
				}
				//enter phone number
				$new_phone = new \Darth\Model\Phone();
				$new_phone->type = 'primary';
				$new_phone->user_id = $new_partner->id;
				$new_phone->address_id = $new_address->id; //associate this phone to an address
				$new_phone->number = $partner->number;
				$new_phone->format = $format;
				$new_phone->save();
			}
		}
	}

}
