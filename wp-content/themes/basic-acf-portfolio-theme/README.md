# CMN6204 - Wordpress Assignment 2

Hi all! So far we have learned to:

- Create and administer a Wordpress website.
- Edit and insert content.
- Install and administer plugins and store templates.
- Understand WP fundamentals 
- Create menus, widgets and basic templates.
- Split and integrate a HTML file into a real template.
- Implement custom template functions via functions.php file.
- Create custom functions which hook to WP events system.
- Integrate WP menu administration into templates via menu zones.
- Create custom templates and dedicated page templates.

At this point you are expected to be able to recreate all of this on your own.

During this assignment, you will put that knowledge into practice, and it is expected to take you at least 2-3 hours to finish everything so don't let that demotivate you. At the end of the assignment, you will have a repository with a working Wordpress installation, ready for further work in class.

*Yes, all the steps are mandatory.*

In the following two weeks, we will be building a simple portfolio website, with a very basic and ancient-looking template. The goal of this assignment is to practice building queries a lot, and recap all that we have learned so far.

# Deadline

The project is mandatory, as we will use it on lectures. All tasks are mandatory. The deadline is next Wednesday at 23:59.

On each lecture we will be dwelling deeper and deeper into code.
This means that you MUST understand these homework assignments as an integral part of your learning and work, and not as an additional or bonus task. If you miss the opportunity to finish a week's homework, it will be really hard for you to follow others on next class. If you have any questions during the way (and you should), please ask on Slack, in the #code channel.

Again: Please do not fail to submit the project on time, as it will prevent you from actively working on the lecture and understanding the future code.

## Week 3 - Real Templating

- Fork this repository and clone the project to your computer.
- Set up the project in such a way that it responds to the domain name `portfolio.dev`.
- Download and install a brand new Wordpress installation. The domain name MUST be `portfolio.dev`. The website should be named `My Portfolio`. Database name should be `wp2_portfolio`, Administrator credentials should be `admin | password`.
- Update WP to the latest version, and do not forget to commit this as a single commit.
- Install ACF plugin from the store, and do not forget to commit this as a single commit.
- The website should contain 4 pages named: `Welcome`, `Contact`, `My Work`, `About Me`
- The website posts section should contain 3 Project Categories of your choice. Make it something work related, for example "Websites", "UX Design", "Applications", "Cloud Services".
- You should create 9 projects and spread them evenly into these categories. Project names must make sense. Project text can be left lorem ipsum, but all projects must contain the following: A screenshot, Client company name, completed date.
- All posts must be properly tagged. Every post needs minimum 2 tags with the names of technologies used in the project. "PHP", "Wordpress", "Photoshop", "JavaScript", "NodeJS" ...
- "About Me" page needs to contain a pretty portrait of youselves, and at least 4 paragraphs of any text or lorem ipsum.
- Welcome page should contain: "A simple welcome statement paragraph. Not lorem ipsum.", and a cute large welcome image. + "3 imaginary quotes from satisfied clients, with small-ish photos of these people." This page should also be set as the static front page in settings.
- Contact page should include some contact information, as well as a link to some nice google maps location. Also a textual representation of this address where your imaginary HQ is located.
- My Work page should be left empty for now.

--- Take a breath... Ok... Go... ---

- Remember to `git commit` often, and to write propper messages! I expect the following to be AT LEAST 5 commits.
- Let's practice some basic RegExes now. Create a gitignore file where you ignore `wp-config.php`, `node_modules`, windows, linux and macOS hidden files, as well as `.htaccess`. These are all the regex rules you need to follow. 
	1. Any folder named `node_modules` anywhere in project.
	2. `wp_config.php` in the project root.
	3. All files named exactly `.htaccess`.
	4. All `.DS_Store` files in all directories.
	5. `Thumbs.db` and `Desktop.ini` and `.lnk` also in all directories.
	6. Any log files (ending with `.log`) in all directories.
- Create a brand new empty theme named `Basic ACF Portfolio Theme`. The index.php file should contain only the line "This is index.php template" for now.
- For now, while under development, the theme should contain SAE logo as a screenshot.
- You were given an ugly HTML template by the lazy frontend developer, which you can find within the folder named `assets-week-3` in the root of the project. Move this folder inside your theme, so that we do not have any non essential items in the root. This move is also temporary, as we will be eventually deleteing the whole folder. Because of this temporary nature of this folder, you do not have to insert a "Scilence is golden" file.
- Use our future front page HTML template (`main-page.html`) to create a header and footer template files. Implement those new files in the index template as we did multiple times in class and in homework so far.
- Implement a simple custom title function named `custom_title` which will output the title in the same way as we did in class: `Site Title ~ Site Description`.
- Find a way to add the CURRENT PAGE title to that function. For example: `Contact Page | Site Title ~ Site Description`.
- Replace hardcoded site title at selector location `.navbar .navbar-brand` with the real Site Title.
- Define a new menu zone in `functions.php` like we did in the class, named `main-menu`. Create the appropriate menu in Admin Panel, and assign it to this zone. Create menu items for Home, My Work, About me and Contact pages. Implement this menu in our theme header like we did in class.
- Find a way to set some pretty and more descriptive names for all four menu items in the Admin Panel. For example instead of "Contact", let it be "Hire me!".
- Create a separate template for the static front page we created. The HTML used should be extracted from the `main-page.html`. The template MUST implement header and footer templates we created earlier, like we did in class.
- There is a div on selector location `.container .row .col-lg-6` Find it, and empty its contents. Instead of those paragraphs, output the page content that you can set via Admin editor. Hint: We did this in class, remember the `the_post()` directive for loading the current page info? Leave the rest of the page like it is for now.
- Create a basic `page.php` template from HTML `blank-page.html`. Like in the previous template, you must replace the contents of `.content` div with the real page content by using `the_content()` method. This is the page fallback template, so we do not have to specially assign it to any pages. Verify that it works for all pages except Home, by default.
- Use the HTML from `about.html` page to create a custom page template named "About us Template". Replace content with real content at location `.container .row .col-lg-6`.
- Use the HTML from `my-work.html` page to create a custom page template named "Portfolio expose Template". Leave it as is, we will edit it in class.
- Do the same for contact page. The custom template should be named `Contact Page with map`. No need to echo page content for now.
- Do the same for 404 page. No need to echo page content, since it is a 404 page.
- Do the same for `single-category.html` page. No need to edit anything. This template file must be named exactly `category.php`. We will explain this further in class. No need to edit the file for now.
- Do the same for `portfolio-item.html` and name the template file exactly `single.php`. We will explain this further in class. Replace content with real content.
- Bonus task: (NOT mandatory) Find a way to shorten content to a length of 180 character excerpt. Write a custom function that does this.
- MANDATORY: Verify that everything works as specified.
- Open up a pull request, and select me (`markomitranic`) as the review delegate in the right sidebar menu on the pull request page.

- Hey! Take it easy, it takes time to write this stuff.

## Week 4 - Database Queries

Ok, so you learnt how to divide a real HTML bootstrap page into segments and templates. You even learned how to echo content, titles, write custom functions and so much more. Let's take a different route now, enough of HTML, CSS, templates. Let's write some PHP.

On the previous lecture you have seen and written at least two queries. This homework will be all about writing more. Quite a lot more. I have split it in two parts, the first one concerns the queries themselves, so you will concentrate on the syntax - writing propper query arguments, and searching for specific posts. The second part will put things into perspective, and you will actually create loops that output data into bootstrap templates we created last week. Awesome!

*Note: you can find a comprehensive cheatsheet forall possible query arguments on https://www.billerickson.net/code/wp_query-arguments/*

- Create a new custom page template. Name it `Query Practice Template`. It should be completely empty (except the template name declaration) and should not implement header or footer. A completely empty page.
- Create a new page in Wordpress admin, and set it to use this new template. Visit it to verify that the page is indeed completely blank. Add this page to your header menu for easy access. Set the menu label to `Sandbox`.
- In the template file, copy the php code that i created in `query_practice.php` file in `assets-week-4` folder. The code shows examples of three queries. Investigate all three. Look at how they work. Read the code and my comments. Look at the page, compare results.
- The third query may not work with your wordpress. I have set the arguments to work with my installation, but your category or tag names are different. Customize it to work with your setup. It's easy. If you have any trouble, please ask on #code on slack.
- Continue using the same file for this practice. Echo a new header, like i did before every example, and in it echo `Task #1`. Do the same for further practice tasks.
- Task #1: Write a query that *outputs titles* of *only 2* posts that have last been *modified*.
- Task #2: Write a query that *outputs titles* of all *pages*!
- Task #3: Write a query that *outputs creation dates* of all *posts*. The posts must be sorted by *created date*, in an *descending order*.
- Task #4: Write a query that shows *all* the *posts* for *two tags* of your choice at the same time. Output each post title and it's *tag list*.
- Task #5: Write the same query, but limit post number to 3.
- Task #6: Write a query that finds the *page* by name *Practice*, and output it's author ID.
- Task #7: Copy the same query, but use the author ID in combination with the `get_user_by()` method. It will get you the user object, so that you can output Author's full name and email.
- Task #8: Write a query that outputs all *posts* from a certain category of your choice. Set the output limit to unlimited number of posts (-1) , and order them by title in an alphabetical order.
- Task #9: Create a query that lists lists all *posts*, output limit is *unlimited* and are ordered by ascending alphabetical order. The output must be shown as an ordered list (`<ol>`) with list items being each post's `Post Title [Author Name] (Created Date)`.

--- Take a breath... Ok... Go... ---

- On the `My Work` page, don't actually want to show posts, we want to show categories.
- Use the `get_categories()` method to get all your categories into a variable. Open up the `My Work` page that we used as an example in class, and replace the WP_Query of posts that we did in class with foreach loop showing all categories in these boxes. It should be really easy and straightforward.
- You should expect to have three boxes now, and should replace the boxes title and description and link. You can easily get the link via the `get_category_link()` method, look it up in codex.
- Looks good, right?! When you click on any of them, they should open up a new page that looks like post listing, right? It actually automatically uses `category.php` template, we have talked about this in class.

- Write a query that outputs *all posts* from *current category* in the `category.php` template. The order should be by *descending created date*, so that we always have the newest post on top.
- For this query you will need the slug, id or the name of the current category and you can easily get that via `$wp_query->get_queried_object()` method.
- Each post should be shown as a row-card, which contains the post name, 180char excerpt and a permalink on the button. We did this same thing in class, so it should be pretty easy by now. Leave the picture the gray default as is for now, as we do not yet have custom fields.

- Open your Single Portfolio Item template (`single.php`)(its the default post template). If you visit any of your portfolio pages that you outputted in the last query, you will notice they have a related projects section in the bottom.
- Create a WP Query that returns 3 random posts from the same category.
- You will notice that since we only have three posts in each category (courtesy of homework #3), it will always show the same three posts, including the current page. Find a way to remove the current post from the results, so that we only show 2 posts. It is a pretty common procedure, google it.
- BONUS TASK: NOT MANDATORY - The query works now, and outputs 2 boxes, but since we still have no custom fields for images, we cannot fill these boxes now so they show the gray default images. Leave them as it is. Just set the post permalink on the anchor, so that at least the links work. (if you are feeling lucky, you might try using the built in featured image functionality, but it is NOT MANDATORY, we will do this on the next lecture)

## Week 5 - Advanced Custom Fields

Great work with the Queries. Now let's go for the real deal - Custom Fields.

- You will need the ACF Pro plugin which you can request from the lecturer.
- Go into WP settings and set the following sizes: `Thumbnail-700x300-true`, `Medium-350x-200`, `Large-1280x1280`.
- Create a custom image size via `add_image_size` for `Portfolio Featured` width 700 and height 500. THe image should be cropped exactly.
- Create a custom image size via `add_image_size` for `Hero-1920x1080-true`.

### My Work
Create a new ACF Group named `Portfolio Page` (you may already have one from the lecture). It should be applicable only when `Page Template` is `Portfolio Template`. Also, don't forget to set the Group's Position and Style to High and Standard like we did in the class.

- Create a custom field named `Hero Image`. Echo the image in the appropriate HTML section in the template. You can use any image. Verify that everything works. Image size used on the frontend should be `Hero`.

### Single page
Create a new ACF Group named `Portfolio Item Page` (you may already have one from the lecture). It should be applicable on all `Posts`. Also, don't forget to set the Group's Position and Style to High and Standard like we did in the class.

- Create a custom field named `Hero Image`. Echo the image in the appropriate HTML section in the template. You can use any image. Verify that everything works. Image size used on the frontend should be `Portfolio Featured`. We did this in class.
- In the previous homework, we made a query on the bottom of the template, that shows related posts. But you may have noticed that tey do not show any images. Replace the placeholder with the newly created custom field value, with the Thumbnail size image.

### Category
- Like we did in the previous example, we have the same problem on the category page. Fix that using the `Portfolio Featured` image size.

### About me
Create a new ACF Group named `About Page` (you may already have one from the lecture). It should be applicable only when `Page Template` is `About Template`. Also, don't forget to set the Group's Position and Style to High and Standard like we did in the class.

- Create a custom field named `My Portrait`. Echo the image in the appropriate HTML section in the template. You should use the image that you have already prepared in the editor. Remove it from the editor and select it as the new Portrait. Verify that everything works. Image size used on the frontend should be `Large`.
- Create a repeater field named `Customers` which repeats a single image field named `Logo`. The counstraints should be `min 0` and `max 6`. You will find the placeholder for these images on the bottom of the about template under the title `Our Customers`. Create a loop and output all logos there.

### Homepage
Create a new ACF Group named `Front Page` (you may already have one from the lecture). It should be applicable only when `Page Type` is `Front Page`. Also, don't forget to set the Group's Position and Style to High and Standard like we did in the class.

- The Front page also has a small welcome image on the side that you have put in the editor for now. Create an Image field for this image and name it `Welcome Image`. 
- Create a slider by using a repeater field like we did in the class. The repeater field constraints should be set to `min 3` and `max 3`. The fields that repeat should be `Slide Image`, `Slide Title`, `Slide Description`. 
- Echo the fields in an appropriate manner on the front-end. The image shown should be `Hero`. We did this in class, and even tho this is hard, it should be understandably easy for you. Ping me on Slack if you have any trouble.
- In order to fill the Call to action section near the bottom of the front page, we need two fields: A text field and an URL field. Create them and echo the values in the frontend.
- **BONUS TASK 1: (OPTIONAL)** The last thing we need is a testimonials repeater. It needs A photo, name, quote and link. Try to solve it yourself, and ping me on Slack if you have any trouble.


### Contact Page
- **BONUS TASK 2: (OPTIONAL)** Contact page has a map. Find out how to use the Google Map custom field. You will fail. If you do, ping me on Slack.

Rejoice, Hooray!
