# mini program

this program is mini parts of php.
changing image acording date.

日付によって表示を変えるミニPHPプログラムです。
jsonで指定した画像を指定した日付に応じて出力します。


# example json

dateで指定した日付までが期限

```

{
	"001": {
		"date": "2016-11-7 10:00:0",
		"imgurl": "**01.jpg",
        "alt":"オルト1"
	},
   	"002": {
		"date": "2016-11-7 11:20:0",
		"imgurl": "**01.jpg",
        "alt":"オルト2"
	}
}

```

## how to

設置ディレクトリーに

```

mini.php
settingdata.json

//呼び出し側からは
include(dirname(__FILE__)."/mini.php");

```

を設置する。
必要に応じてプログラムを書き換えてください。




