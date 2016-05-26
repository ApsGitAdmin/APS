
Written by Salvador Molina <salva.momo@gmail.com>
                           <drupal.org: https://drupal.org/user/826088>
                           <http://adevfromtheplains.com>

CONTENTS OF THIS FILE
---------------------

 * DESCRIPTION
 * USAGE
 * IMPORTANT NOTE

DESCRIPTION
-----------

Field Type Generator:

Module to generate all the code for a compound field type, so that a whole
working module is generated from a simple form, compressed in .tar.

It's a tool to help developers accomplish code-related tasks by scaffolding most
of the repetitive, grunt work that accompanies the creation custom field types
to store arbitrary data in the database as part of a Drupal entity.

On top of the most basic features, it has some very interesting features, like
support, out of the box, for the following data fields as columns of the field
type created:

  1.- "text_format" Textareas that need to store the chosen format.
  2.- Date fields (https://www.drupal.org/project/date)
  3.- Entity Reference fields

It's not expected to be touched *a lot*, and the goal of the tool is to save
developer's time, not to be a perfect tool to cover every possible case out in
the wild.

USAGE
-----

1.- Estimate a "build a custom field type" task for 4 hours.
2.- Enable module
3.- Go to "/ftg" path.
4.- Solve 80% of the task in 5 minutes from that UI. (UI is self-explanatory).
5.- Code the other project-specific 20% in whatever time you need.
6.- Enjoy life for the remaining 2 hours and 55 minutes.

* (Following step number 1 is discouraged. Be professional).

IMPORTANT NOTE
--------------

Since this is a module for developers, it shouldn't be enabled in any production
site.
