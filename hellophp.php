<<<<<<< HEAD <?php

                $text = <<<EOM

github練習用

//コマンド早見表
https://qiita.com/kohga/items/dccf135b0af395f69144

//現在のブランチの確認
git branch

//ステージングの確認
git status

//コミット状況の確認
git reflog

//ステージング取り消し(前回のコミット位置まで戻る)
git reset -q HEAD
-qは出力しない
git reset
上記と同様(デフォルトでHEADつき)

EOM;

                echo $text;
