<?php l::set([
	// All pages
	'membership.firstname' => 'Vorname',
	'membership.lastname'  => 'Name',
	'membership.email'     => 'E-Mail',
	'membership.password'  => 'Passwort',
	'membership.update'    => 'Update',
	'membership.login'     => 'Anmelden',
	'membership.register'  => 'Registrieren',
	'membership.cancel'    => 'Abbrechen',
	'membership.delete'    => 'Account löschen',

	// Account
	'membership.account.title'          => 'Account bearbeiten',
	'membership.password.link'          => 'Passwort ändern',
	'membership.firstname.error'        => 'Gib einen gültigen Vornamen ein.',
	'membership.lastname.error'         => 'Gib einen gültigen Namen ein.',
	'membership.email.error'            => 'Gib eine gültige E-Mail-Adresse ein.',
	'membership.account.update.success' => 'Dein Account ist aktualisiert.',
	'membership.account.update.error'   => 'Registrierung ist fehlgeschlagen!',

	// Delete
	'membership.delete.title' => 'Account löschen',
	'membership.delete.label' => 'Account für immer löschen',
	'membership.delete.help'  => 'Der Account wird für immer gelöscht und ist nicht wiederherstellbar.',

	// Login
	'membership.login.title'     => 'Anmelden',
	'membership.forgot.password' => 'Passwort vergessen?',
	'membership.login.error'     => 'Benutzername oder Passwort nicht korrekt.',

	// Password
	'membership.password.title'          => 'Passwort ändern',
	'membership.password.label'          => 'Neues Passwort',
	'membership.password.error'          => 'Gib ein gültiges Passwort ein.',
	'membership.password.update.success' => 'Passwort wurde geändert.',
	'membership.password.update.error'   => 'Änderung des Passworts schlug fehl!',

	// Register
	'membership.register.title'        => 'Registrieren',
	'membership.login.link'            => 'Anmelden',
	'membership.register.send.success' => 'Dein Account wurde erstellt! Du erhälts in kürze eine E-Mail zur aktivierung des Accounts.',
	'membership.register.send.error'   => 'Das E-Mail konnte nicht gesendet werden! Kontaktiere den Website Besitzer um deinen Account zu aktivieren.',
	'membership.register.input.error'  => 'Hast du alle deine Angaben korrekt eingegeben? Auch die E-Mail-Adresse?',
	'membership.register.email.exist'  => 'Es besteht bereits ein Account mit dieser E-Mail-Adresse',

	// Reset
	'membership.reset.title'        => 'Passwort zurücksetzen',
	'membership.reset'              => 'zurücksetzen',
	'membership.reset.send.success' => 'Wir schicken dir ein E-Mail mit den weiteren Instruktionen um das Passwort zurückzusetzen.',
	'membership.reset.send.error'   => 'Das E-Mail konnte nicht gesendet werden! Versuch es später nochmals.',
	'membership.reset.error'        => 'Es gibt kein Account zu dieser E-Mail-Adresse!',

	// Send email
	'membership.send.hello'          => 'Hallo',
	'membership.send.active.subject' => 'Aktiviere dein Account - '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'',
	'membership.send.active.body'    => 'Danke für die Registrierung bei '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. Aktiviere nun dein Account indem du auf den Button klickst.',
	'membership.send.active.link'    => 'Aktiviere mein Account',

	'membership.send.reset.subject'  => 'Passwort zurücksetzen - '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'',
	'membership.send.reset.body'     => 'Jemand, (hoffentlich du?) wollte dein Passwort zurücksetzen für den Account bei '.str_replace('www.', '', $_SERVER['HTTP_HOST']).'. 
	Falls du das Passwort zurücksetzen willst, klicke auf den Button. Wenn nicht, lösche dieses E-Mail.',
	'membership.send.reset.link'     => 'Passwort zurücksetzen',
]);
