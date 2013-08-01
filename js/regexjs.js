/*
RegExp Object (from w3 school)

A regular expression is an object that describes a pattern of characters.

Regular expressions are used to perform pattern-matching and "search-and-replace" functions on text.
Syntax
var patt=new RegExp(pattern,modifiers);

or more simply:

var patt=/pattern/modifiers;

    pattern specifies the pattern of an expression
    modifiers specify if a search should be global, case-sensitive, etc.

Modifiers

Modifiers are used to perform case-insensitive and global searches:

Modifier 	Description
i 			Perform case-insensitive matching
g 			Perform a global match (find all matches rather than stopping after the first match)
m 			Perform multiline matching

Brackets

Brackets are used to find a range of characters:

Expression 			Description
[abc] 				Find any character between the brackets
[^abc] 				Find any character not between the brackets
[0-9] 				Find any digit from 0 to 9
[A-Z] 				Find any character from uppercase A to uppercase Z
[a-z] 				Find any character from lowercase a to lowercase z
[A-z] 				Find any character from uppercase A to lowercase z
[adgk] 				Find any character in the given set
[^adgk] 			Find any character outside the given set
(red|blue|green) 	Find any of the alternatives specified 

Metacharacters

Metacharacters are characters with a special meaning:

Metacharacter 	Description
. 				Find a single character, except newline or line terminator
\w 				Find a word character
\W 				Find a non-word character
\d 				Find a digit
\D 				Find a non-digit character
\s 				Find a whitespace character
\S 				Find a non-whitespace character
\b 				Find a match at the beginning/end of a word
\B 				Find a match not at the beginning/end of a word
\0 				Find a NUL character
\n 				Find a new line character
\f 				Find a form feed character
\r 				Find a carriage return character
\t 				Find a tab character
\v 				Find a vertical tab character
\xxx 			Find the character specified by an octal number xxx
\xdd 			Find the character specified by a hexadecimal number dd
\uxxxx 			Find the Unicode character specified by a hexadecimal number xxxx

Quantifiers

Quantifier 	Description
n+ 			Matches any string that contains at least one n
n* 			Matches any string that contains zero or more occurrences of n
n? 			Matches any string that contains zero or one occurrences of n
n{X} 		Matches any string that contains a sequence of X n's
n{X,Y} 		Matches any string that contains a sequence of X to Y n's
n{X,} 		Matches any string that contains a sequence of at least X n's
n$ 			Matches any string with n at the end of it
^n 			Matches any string with n at the beginning of it
?=n 		Matches any string that is followed by a specific string n
?!n 		Matches any string that is not followed by a specific string n

RegExp Object Properties

Property 	Description
global 		Specifies if the "g" modifier is set
ignoreCase 	Specifies if the "i" modifier is set
lastIndex 	The index at which to start the next match
multiline 	Specifies if the "m" modifier is set
source 		The text of the RegExp pattern

RegExp Object Methods

Method 		Description
compile() 	Compiles a regular expression
exec() 		Tests for a match in a string. Returns the first match
test() 		Tests for a match in a string. Returns true or false
**/

function checkNumeric(chkvalue)
{
var patt1=new RegExp("^[0-9]+$");
return patt1.test(chkvalue);
}
function checkAlphabetOnly(chkvalue)
{
var patt1=new RegExp("^[A-z]+$");
return patt1.test(chkvalue);
}
function checkAlphabetwithSpace(chkvalue)
{
var patt1=new RegExp("^[A-z]+[A-z \s]+$");
return patt1.test(chkvalue);
}
function checkAlphabetwithSpaceandQuote(chkvalue)
{
var patt1=new RegExp("^[A-z]+[A-z \'\"]+$");
return patt1.test(chkvalue);
}
function checkAlpaNumOnly(chkvalue)
{
var patt1=new RegExp("^[A-z0-9]+$");
return patt1.test(chkvalue);
}
function checkAlpaNumwithSpace(chkvalue)
{
var patt1=new RegExp("^[A-z 0-9]+$"); // cara lain space tanpa \s
return patt1.test(chkvalue);
}
function checkSentences(chkvalue)
{
var patt1=new RegExp("^[A-z 0-9.,\'@#*$%/&\(\)\"?]+$"); 
return patt1.test(chkvalue);
}
function checkEmail(chkvalue)
{
var patt1=new RegExp("^[0-9a-zA-Z]+@[0-9a-zA-Z]+[\.]{1}[0-9a-zA-Z]+[\.]?[0-9a-zA-Z]+$"); 
return patt1.test(chkvalue);
}
function checkUrl(chkvalue)
{
var patt1=/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/; 
return patt1.test(chkvalue);
}
function checkIP(chkvalue)
{
var patt1=/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;
return patt1.test(chkvalue);
}