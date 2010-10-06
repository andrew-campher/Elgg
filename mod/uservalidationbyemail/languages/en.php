<?php
/**
 * Email user validation plugin language pack.
 *
 * @package Elgg.Core.Plugin
 * @subpackage ElggUserValidationByEmail
 */

$english = array(
	'email:validate:subject' => "%s please confirm your email address for %s!",
	'email:validate:body' => "%s,

Before you can start you using %s, you must confirm your email address.

Please confirm your email address by clicking on the link below:

%s

If you can't click on the link, copy and paste it to your browser manually.

%s
%s
",

	'email:validate:success:subject' => "Email validated %s!",
	'email:validate:success:body' => "Hi %s,

Congratulations, you have successfully validated your email address.",


	'email:confirm:success' => "You have confirmed your email address!",
	'email:confirm:fail' => "Your email address could not be verified...",

	'email:confirm:success' => "You have confirmed your email address!",
	'email:confirm:fail' => "Your email address could not be verified...",

	'uservalidationbyemail:registerok' => "To activate your account, please confirm your email address by clicking on the link we just sent you.",

	'uservalidationbyemail:admin:no_unvalidated_users' => 'No unvalidated users.',

	'uservalidationbyemail:admin:unvalidated' => 'Unvalidated users',
	'uservalidationbyemail:admin:user_created' => 'Registered %s',
	'uservalidationbyemail:admin:resend_validation' => 'Resend validation',
	'uservalidationbyemail:admin:validate' => 'Validate',
	'uservalidationbyemail:admin:delete' => 'Delete',
	'uservalidationbyemail:confirm_validate_user' => 'Validate %s?',
	'uservalidationbyemail:confirm_resend_validation' => 'Resend validation email to %s?',
	'uservalidationbyemail:confirm_delete' => 'Delete %s?',
	'uservalidationbyemail:admin:with_checked' => 'With checked:',

	'uservalidationbyemail:errors:unknown_users' => 'Unknown users',
	'uservalidationbyemail:errors:could_not_validate_user' => 'Could not validate user.',
	'uservalidationbyemail:errors:could_not_validate_users' => 'Could not validate all checked users.',
	'uservalidationbyemail:errors:could_not_delete_user' => 'Could not delete user.',
	'uservalidationbyemail:errors:could_not_delete_users' => 'Could not delete all checked users.',
	'uservalidationbyemail:errors:could_not_resend_validation' => 'Could not resend validation request.',
	'uservalidationbyemail:errors:could_not_resend_validations' => 'Could not resend all validation requests to checked users.',

	'uservalidationbyemail:messages:validated_user' => 'User validated.',
	'uservalidationbyemail:messages:validated_users' => 'All checked users validated.',
	'uservalidationbyemail:messages:deleted_user' => 'User deleted.',
	'uservalidationbyemail:messages:deleted_users' => 'All checked users deleted.',
	'uservalidationbyemail:messages:resent_validation' => 'Validation request resent.',
	'uservalidationbyemail:messages:resent_validations' => 'Validation requests resent to all checked users.'

);

add_translation("en", $english);