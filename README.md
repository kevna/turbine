Turbine Interface
=================
A small side project in which I am writing a web interface for quiet revolution wind turbines.

The Project
-----------
Quiet revolution turbines come with an attached server similar to the raspberry pi in nature, the server collects statistics from the turbine and serves them in xml datasheets over HTTP.
The project began as a matter of interest in exploring the documentation for the server system. The serving of pure xml and at a maximum of 1 page per second demonstrated that the server was not intended for widespread access, indeed the company provide a simple service that collects the data and provides a simplistic interface for it's viewing.
As a result I began work on this site, I wrote a simple service on a raspberry pi to randomly generate data into the xml format, save it and serve it over HTTP. Another server, the one hosting the actual site, runs a background script that requests the xml file from the simulated server, checks the xml file's validity & saves it into a local xml document.
The page index.php loads the information from the most recently requested xml document & displays it.

Next Steps
----------
The next major step for the site will require the background script to move the current xml document into a 'history' file structure (yet to be determined). Once this is complete it will be possible to provide a service for viewing past data from the turbine & thus the progression of the data over time.
After the site is given 'awareness' of the time progression for the data the intention is to provide histogram functionality to better view the progression of data over time.

Long Term Improvements
----------------------
Once the site is fully functional for the one turbine system that it is being developed for it would be interesting to adapt the system to collect and serve data relating to multiple turbines for larger systems.

