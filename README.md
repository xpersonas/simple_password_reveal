# Simple Password Reveal #

This module alters password fields on user login and user edit forms to show plain text by default, while also adding a checkbox for concealing the password as needed.

Rather than creating friction for a user to show a password each time by clicking a check box, the password is revealed by default. In my experience, I generally prefer password fields to be plain text almost all the time. It's only when in public or during a presentation that I want to conceal passwords.

There is another module that provides similar functionality. However, Simple Password Reveal takes a different approach than the Password Toggle module. They use javascript to add a checkbox to each password field in any and all forms. They also have a Drupal 7 version.

This module attempts to keep things simple by concentrating solely on the user login and user edit pages. If you need this feature on custom forms, on forms loaded by ajax, or for a Drupal 7 site then this module may not be for you.

Simple Password Reveal also uses form alters to add one checkbox per form, rather than one checkbox per input. So, for example, when you are on the user edit page you have three password fields — current password, new password, and confirm password. Rather than having a checkbox for each password field, this module only has one.
