# Simple PHP vCard to JSON

[![oFahel](https://i.imgur.com/hSyuS32.png)](https://github.com/ofahel/)

Warning: Project not rigorously tested!

## 🎉 Installation/Usage

Download the vcard.php and put on your project folder.

```php
<?php
include("vcard.php");

//Instantiate the library, optionally pass your vCard content
$vCard = new vCard2JSON();

//Get JSON from vCard, optionally pass your vCard content
$json = $vCard->getJSON();

?>
```

## Development

Want to contribute? Great!
You are welcome 🥳

## License

GNU General Public License
