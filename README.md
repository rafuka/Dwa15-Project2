# Password Generator

Live URL: http://p2.jrwebdev.me

## Description
This project is a password generator inspired by the [xkcd comic](http://xkcd.com/936/).

The user can specify the number of words to use (from 1 to 5), and the number of special characters and/or digits.

When clicking on the *Generate!* button a new password is generated.

The words were taken by scraping a website with common english words.

It was built from scratch on PHP.


[View Screencast Demo](https://youtu.be/WgbifXGPJ28)

## Info for TA's
Please check the comment that starts with *NOTE for TA's* on the *logic.php* file.

## Things that can be improved/fixed
There is a small glitch when clicking the *Generate!* button that makes the main *div* shrink and grow back again.

Instead of scraping the web every time a user goes to the site, it would be better to scrape once for a large word base and save the words in a file for future use.

## Resources
For styling: [Bootswatch Theme](https://bootswatch.com/paper/)

Words scraped from: http://www.paulnoll.com/Books/Clear-English/

> Created By J. Rafael Garcia, e-mail: rafuk89@gmail.com
