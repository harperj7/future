# Future

Programming tests
_________________

###Test 1 - Shapes

 Write a PHP code package that calculates the volume of all of the following:

 Cylinder
 Cuboid
 Pyramid

The pyramid base can be either triangular, square, rectangular or all. Bonus point for implementing all bases.

###Test 2 - FizzBuzz++

Write a PHP script that will be executed from the command line.

- The script should echo the numbers 1 to 500, each number being on a new line.
- If the number is divisible by 3 the script should echo 'FIZZ', if the number is divisible by 5 the script should echo 'BUZZ'.
- If the number is divisible by both 3 and 5 the script should echo 'FIZZBUZZ'.
- If the number is a prime, echo 'FiZZBUZZ++'

The same script should also log the above output to a file called fizzbuzz.log. Data that may already be in the fizzbuzz.log file should not be overwritten.

###Test 3 - Feed Import

Write a reusable code package that consists of classes whose purpose is to import content within the following 2 feeds:

News Feed - RSS2 Format
http://...

News Feed - NewsML Format
http://...

The content in each of the above 2 feeds are identical. The feed is cached for a 2 hour period at the server end. However, each feed has a different format namely - RSS2 & NewsML.

The code package should do the following:

- Accept a feed format identifier - RSS2, NewsML and the feed URL
- Pull in the content within a feed
- Extract the following fields from the feed - title, description, publication date and image path only.
- Store the extracted content in a text file.
