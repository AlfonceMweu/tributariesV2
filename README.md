LEGACY OF LEGENDS

This project is a tribute webpage dedicated to the greatest legends of the tech wordld.It is different than other tribute pages in that it honors multiple people whom we acknowlrdge have made great contributions to the advancement of technolog rather than the usual one person per page.The project aims to reach to the younger population with whom this kind of information may be difficult to get.

TECHNOLOGIES USED:

1.HTML, CSS, Java Script and PHP languages

2.My SQL and PostgreSQL

3.XAMPP

4.Visual studio

5.Vercel

6.JSON and UTF-8 formats.

7.libraries used. -bayfrontmedia/php-mime-types: A library to detect the appropriate MIME type of a file based on its extension. -graham-campbell/result-type: A library for implementing the Result type. -guzzlehttp/guzzle: A PHP HTTP client library. -guzzlehttp/promises: A library for creating and handling promises in PHP. -guzzlehttp/psr7: A PSR-7 message implementation that provides common utility methods. -league/uri: A URI manipulation library. -league/uri-interfaces: Common interface for URI representation. -phpoption/phpoption: Option Type for PHP. -sr/http-client: Common interface for HTTP clients. -psr/http-factory: Common interfaces for PSR-7 HTTP message factories. -psr/http-message: Common interface for HTTP messages. -ralouphie/getallheaders: A polyfill for getallheaders. -supabase/functions-php: Supabase Edge Functions for PHP. -1supabase/storage-php: A library for managing Supabase storage.

8.GitHub.

INSTALLATION GUIDE

1.Clone the repository: git clone https://github.com/AlfonceMweu/tribute-webpage.git

2.Open the project in your preffered code editor.

3.Open the inde.html file in your broswer to view the webpage.

CODE DOCUMENTATION.

1.bioData.php This code connects to a database, retrieves all records from the bio_data table, and outputs the data as a JSON-encoded string. If the query fails, it outputs an error message.

2.composer.json This file specifies the dependencies required for the PHP project. In this case, it specifies supabase.

3.composer.lock The composer.lock file locks the dependencies to specific versions to ensure consistency across installations.Dependencies are external libraries or packages that the project requires to function properly.To lock in the dependencies means that the exact versions of each dependency are recorded.This ensures that every time the project is installed or updated,the same versions of the dependencies are used, providing consistency across different environments and avoiding potential issues caused by version differences. Examples of dependencies used here are:bayfrontmedia/php-mime-type- a library to detect the appropriate MIME type of a file based on its extension,graham-campbell/result-type-library for implementing the Result type and guzzlehttp/guzzle-PHP HTTP client library.etc

4.config.php This is a php script that connects to a PostgreSQL database and fetch all records from the bio_data table, outputting the result in JSON format.PostgreSQL is used here solely because it supports SQL and JSON querying. The commented-out code is an alternative method for connecting and querying data using Supabase. Supabase is a backend-as-a-service platform that provides a range of tools to help developers build applications faster.

5.databaseSearch.php This is a PHP script that performs a search query to retrieve records from the bio-data table in the database and returns the results in JSON format.

6.index.css This file contains various CSS attributes that style the elements of the webpage this includes the header, dropdown menus, main content areas, animations, and responsiveness for different screen sizes..This includes 1.Reseting padding, margin, and sets box-sizing to border-box for all elements and setting the body to hide horizontal overflow and giving it a whitesmoke background color.2.Styling the header section to be fixed at the top with a height of 12vh, full width, and a dark background color.3.Styling the dropdown menu and its button, including positioning, colors, and sizes.4.Defining keyframe animations for blinking and other effects,Adjusts styles for screens with a maximum width and those with a minimum width of 2000px.

7.index.html This HTML file creates a structured webpage with a head and body.The head section contains contains meta information about the document, including character set, viewport settings, title, logo and external stylesheets.The body has four sections:the header section fixed with a dropdown menu for navigation,the main section containing an introductory description,a button, and an image,the main content section containing information about the website's purpose, benefits, data validity complete with images and cards and lastly the footer section which has the message powered by google.

8.tribute.css This file contains several user interface elements and components styling.This includes Resettng padding, margin and setting box-size to border-box for all elements,setting the body to hide horizontal overflow and gives it a whitesmoke background color,Hiding the scrollbar for the body,styles for a loading screen with a rotating loader animation,styles for the navigation menu and dropdown elements, including hover effects,styles for the search section, including input and submit buttons,styles for popup containers, including animations and exit button and adjust styles for different screen sizes to ensure the page is responsive and looks good on various devices.

9.tribute.html This file contains a head section and a body section containing a javascript section that Initializes loaders and hides them once the page is fully loaded it also adds an event listener to the submit button for searching the database and displaying the results in a popup,Additional functions such as The checkOnline function that fetches information from an external API if no results are found in the local database and displays the fetched information in a popup if available.The fetch function fetches data from the bioData.php and dynamically creates elements to display the fetched data it also adds event listeners to the "View More" buttons to display detailed information in a popup.

10.tribute.php This tribute.php script reads JSON format input data, checks for the existence of optional fields, interacts with a MySQL database to check for existing records, and inserts new records if necessary.

11.COPYING The copying file contains GNU General Public License v3.0 licence.

12.tributelogo.svg This file contains a scalable vector graphics image that can be resized without loosing quality.

CONTENT DOCUMENTATION The following images were used: 1.https://media.gettyimages.com/id/1335295270/photo/global-connection.jpg?s=612x612&w=0&k=20&c=pVIatR8XcihqKTDnISYXNWvSkpZkdeJJa3YNfk9zC6g=

2.https://media.gettyimages.com/id/1266858252/photo/anonymous-businesswoman-analyzing-statistical-business-reports-on-her-tablet-pc-at-the-office.jpg?s=612x612&w=0&k=20&c=tzsfknhsmCHFXy6ktY2a479Ym0T1VlsDYEr5RBs4ykQ=

3.https://media.gettyimages.com/id/1350722246/photo/server-room-background.jpg?s=612x612&w=0&k=20&c=f6CoZ-PmbMo5zCsRPAP9B4tdwS8yvkSKBnCfC3GRmqU=

DEPLOYMENT The project has been deployed using vercel since it intergrates seamlessly with Github.The preview URL is https://tributaries.vercel.app GUIDE:

1.Sign up or login to vercel.com

2.go to the vercel dashboard.

3.click on new project and import the repository.

4.follow the prompts to configure the project,vercel will automatically deploy the project whenever changes are pushed to the repository.

DESIGN CHOICES Color choices-the color pallette is inspired by the scientific theme,using different shades of blue and white to reflect clarity and knowleddge.

Typography-a readble font family was used to enhance accessibility and visibility.

Design and layout- the page is designed to celebrate icons in the technology field showcasing biographiesa and images.The who are we,why us nad view more sections help the users navigate and understand the offerings of the site.The emphasis of data validity and use of clear images enhances user engagement.

CHALLENGES AND SOLUTIONS The most challenging part like any other webpage was creating a responsive and compatible layout that can work on different types of devices.We overcame this by using CSS media queries and ensuring all elements were up to scale.

Another challenge was obtaining a high qauality API to fetch information from the internet,this is yhey expensive to acquire and there was lack of funds we overcame this by getting a free one but with lower capabilities.

FUTURE IMPROVEMENTS A high quality API that can fetch more information of an individual from the internet.

More multimedia elements including video clips of interviews and documentaries.

LICENCE

This project is licenced by GNU General Public License v3.0.
