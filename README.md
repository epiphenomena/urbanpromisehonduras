# uph
Website for UrbanPromise Honduras

## Overview

The core idea is that LLMs are pretty good at producing html/css/js with a desired appearance and functionality,
especially when an experienced professional can guide the process. And most websites don't really need more than
a few static pages -- think a small business that just needs: About Us, Portfolio, Contact Us. The challenge is
that having put together this 1-3 static pages, it is intimidating and error prone for a non-technical user to
keep the content up-to-date (requires editing the html), and any changes to common site elements in sync (requires
editing the html in multiple places or maintaining separate files for css and js which then have to be versioned to
break the caching of clients for updates to be visible). So the proposal is that the professional can:

1) work with an LLM to produce the initial site design (with temporary filler content)
2) break the design up into separate css, js and html templates (so that elements common to multiple pages are shared)
3) identify and pull out the handful of elements that the non-technical web admin will want to edit
4) provide for that web admin a very simple, clean admin ui for editing those elements and then publishing the changes
5) Have the final product served to clients be fast "hand written" html/css/js files.

This project will serve as a framework or sample project that the professional clones and then edits to achieve this end.

Beyond html/css/js, the main programming language will be php because php is easy to deploy behind apache and has solid support for templating.

As an example:

1) the professional could work with LLMs to get a basic html/css/js page together for a small business.
2) The page has sections: hero, about, portfolio (a series of cards with a picture and description), testimonials, and contact us.
3) The professional isolates the different portions of the page into their own template files inside /site. And hooks those templates up together.
4) The professional sets the hero image to be replaceable by the user by placing it in the /public/data folder and making the appriopriate changes to the templates
5) The professional sets the content section to be editable by the user as markdown by creating a placeholder markdown file in /public/data and making the appriopriate changes to the templates
6) The professional sets the portfolio section up to be editable by the user so that the user can add, delete, rearrange the cards, and edit each card separately where editing a card brings up a form containing a text input for the description and an input to upload a replacement image
7) The professional sets the contact information to be editable as a form with inputs for each part of the contact information, save the data to json
8) The professional compiles the go into admin.cgi
9) uploads the contents of / to the server
10) The user can access https://url-of-domain.com/admin/, enter the HTTP BasicAuth username and password set via .htaccess, and then use the admin pages to edit the data that feeds into the page templates.

## Project Structure

- /public/: The whole directory to be uploaded to web server
  - /data: Directory, protected from being served with htaccess containing the data files that are edited by the admin ui and used by the build script to produce the public site
    - *.json, *.md: data files that can be edited / replaced (via upload of new media files) via the admin ui
  - /media: Directory, public, contains multimedia files that are accessible via the public pages and that can potentially be edited / replaced (via upload of new media files) via the admin ui
  - /admin/* .htaccess requires BasicAuth to access.
    - /admin/index.php -  root page for the admin ui. Functionality described further below.
    - /admin/data-item-label/index.php - html form for editing a particular data file in /data
  - .htaccess: contains rules implementing above access restrictions
  - Parsedown.php: implements a markdown parser -- `include('Parsedown.php'); $file = file_get_contents('FILE.md'); $Parsedown = new Parsedown(); echo $Parsedown->text($file);`
  - index.php: the public site home page
- Rakefile: Build automation file with serve, test and publish tasks
- /tests: Directory containing test files

### The admin ui:

- The @admin/header.php that is included at the top of each admin page includes the submit button for the main form, so you don't need to have submit buttons in index.php


- every page should have a header with links to the admin home page and to the site
- Should be simple clean and modern, basic, easy to use
- mobile accessible but assume that most edits will take place from a desktop browser
- should be contain everything needed to produce automatically layed out forms for editing the different data files:
  - markdown for text entry. Ideally in separate .md files if expected to be more than a single line, otherwise stored as a value in a .json file.
  - replace media files by uploading
  - edit json by having appropriate inputs for values labelled by their key (and handling nested objects / arrays). Do not just present the raw json in a textarea.
  Create a form with separate labelled inputs for each json element. Non-technical users cannot understand the details of json.
  - support adding / deleting / reordering lists of elements. For example, suppose a portfolio section has cards with titles, pictures and descriptions,
    the professional should be able to assign minimum and/or maximum numbers of cards, and the admin ui should enable the user to CRUD them and reorder them.
- The flatout core should provide the tools to make all of this easy.
  - e.g., a wrapper for admin ui data edit forms that responds to GET with the FORM and responds to a POST of the form by updating the data file
  - ideally the php required for editing a given data file should be minimal, calling out to the core with the name and type of the file, maybe a description, maybe a list of the json fields

## Getting Started

To start using flatout:

1. Clone the repository
2. Update the .htpasswd file with your own username and password
3. Modify the data files in the `/data` directory to customize your site content
4. Create or modify templates in `/site/templates` to change the site layout
5. Run `rake serve` to start the development server
6. Access the admin interface at `/admin` to manage your content

## Development Tasks

This project uses Rake for common development tasks:

- `rake serve`: Start the development server on http://localhost:8000
- `rake test`: Run the test suite
- `rake publish`: Publish the site to the server (implement as needed)

### Implementation notes

- Create a rakefile that
  - has a publish task that can be customized to upload to the approriate server
  - has a serve task that starts the dev server built into php (the dev server does not need to respect the htaccess file)
  - has a test task that starts the dev server and runs a test suite against it (don't just run ad hoc tests. write the test, then prove that it fails, then implement until it passes.)