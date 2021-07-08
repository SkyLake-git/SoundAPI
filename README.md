# SoundAPI
Pocketmine-MP のプラグインです

## プレイヤーにサウンドを再生する
このプラグインは簡単にプレイヤーに効果音を再生させることができます。


## 使い方
クラスを使う
```
use Lyrica0954\SoundAPI\Sound;
```

再生する
```
$instance = new Sound($player, "sound name", $pitch, $volume);
$instance->play();
```

## 使い方2
インスタンスを生成しなくとも、1行で再生することもできます。

クラスを使う
```
use Lyrica0954\SoundAPI\Main;
```

再生する
```
Main::playSound($player, "sound name", $pitch, $volume);
```

## 高度な使い方
イベントを使う
```
use Lyrica0954\SoundAPI\event\PlaySoundEvent;
```

再生されたのを受け取る
```
public function onPlaySound(PlaySoundEvent $event){
    #code here...
}
```

関数などの詳細なものはgithub内のコードで確認できます。
