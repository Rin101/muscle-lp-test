<?php
/**
* Template Name: CM3 IO
*/
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>CM3 IO 特長</title>
</head>
<body class="CM3-IO-body">
<div class="scroll-up-button"><i class="fas fa-caret-down"></i></div>
    <header>
        <div class="header-logo">
            <a href="https://musclecorp.com">
                <img src="https://musclecorp.com/motion/wp-content/themes/muscletestm/img/menu-logo2.svg" alt="">
            </a>
        </div>
        <div class="header-nav-container">
            <div class="header-nav">
                <a href="https://musclecorp.com/motion/">モーションTOP</a>
                <a href="https://musclecorp.com/motion/cm3-top/">製品概要</a>
                <a href="https://musclecorp.com/motion/cm3-spec/">仕様/図面</a>
                <a href="https://musclecorp.com/motion/coolmuscle3newcatalog/">カタログダウンロード</a>
                <a href="https://musclecorp.com/motion/contactus/">問い合わせ</a>
            </div>
        </div>
    </header>
    <div class="top-image">
        <div class="top-text">
            <div class="top-text-circle" id="top-text3"><p>コスト追求</p></div>
            <div class="top-text-circle" id="top-text1"><p>応答性向上</p></div>
            <div class="top-text-circle" id="top-text2"><p>ローカル<br>ドライブ</p></div>
            <h2>「IO制御」を活かした高速化・ローコストソリューション</h2>
        </div>
        <div class="layer"></div>
        <div class="see-catalog"></div>
    </div>
    <div class="conversation">
        <div class="question-container">
            <div class="customer-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="question">
                <p>機械のタクトタイムをさらに短縮したいがトータルコストは抑えたいです。
                    安価に実現する方法はありませんか？</p>
            </div>
        </div>
        <div class="answer-container">
            <div class="answer">
                <p>まずタクトタイムを短縮するにはモータ動作の高速化はもちろん、
                    起動信号入力後の応答性も重要です</p>
            </div>
            <div class="customer-service-icon">
                <i class="fas fa-user-tie"></i>
            </div>
        </div>
    </div>
    <div class="border"></div>
    <section class="CM3-IO-section kidou">
        <div class="section-title">
            <h3>起動信号入力後の応答性</h3>
        </div>
        <div class="kidou-text">
            <p>通信速度が高速になり、ネットワークで全ての機器が繋がることが多くなりましたが、
                全ての機器をPLCで一括制御することでトータルコストが跳ね上がり、場合によっては機械のタクトタイムが上がらない可能性があります。</p>
            <p>CM3+は入力信号の応答性を上げることで従来よりもさらに機械のタクトタイムの向上に貢献することが可能となりました。</p>
        </div>
        <div class="kidou-content">
            <div class="kidou-content-top">
                <div class="kidou-content-right">
                    <p class="kidou-content-right-text">90°の回転角度を往復動作</p>
                    <div class="kidou-images">
                        <img class="kidou-img1" src="https://rin101.github.io/muscle-lp-test/assets/画像/kidou-shingou1.png" alt="">
                        <img class="kidou-img2" src="https://rin101.github.io/muscle-lp-test/assets/画像/kidou-shingou2.png" alt="">
                        <img class="kidou-img-b1" src="https://rin101.github.io/muscle-lp-test/assets/画像/io-ill1.png" alt="">
                        <div class="kidou-img-arrow"><i class="fas fa-arrows-alt-h"></i></div>
                        <img class="kidou-img-b2" src="https://rin101.github.io/muscle-lp-test/assets/画像/io-ill2.png" alt="">
                        <div class="kidou-img-text1">20msec</div>
                        <div class="kidou-img-text2">20msec</div>
                    </div>
                </div>
                <div class="kidou-content-left">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/lJ52c1NZlLY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="kidou-content-bottom">
                <div class="draw">
                    <p class="draw-text">センサの信号をPLCで制御する場合、センサ信号入力処理時間、通信周期の待機時間により若干のタイムロスが発生します。</p>
                    <div class="graph">
                        <div class="draw-sensor">
                            <div class="draw-sensor-box"><div class="sensor-box"></div><div class="sensor-line"></div></div>
                            <p>センサ</p>
                        </div>
                        <div class="line"></div>
                        <div class="plc-draw">
                            <div id="plc-box"><div><p>P</p><p>L</p><p>C</p></div></div>
                            <div class="plc-draw-box"><div></div></div>
                            <div class="plc-draw-box"><div></div></div>
                        </div>
                        <div class="line"></div>
                        <div class="plc-draw">
                            <div class="plc-driver"><div><p>ド</p><p>ラ</p><p>イ</p><p>バ</p></div></div>
                            <div class="plc-mota"><div class="mota-text"><p>モータ</p></div><div class="mota"></div></div>
                        </div>
                    </div>
                    <div class="graph-text">
                        <div class="graph-text-item graph-text1">
                            <div><p>入力処理</p></div>
                            <div><p>演算処理</p></div>
                            <div><p>出力処理</p></div>
                        </div>
                        <div class="graph-text-item graph-text2">
                            <div><p>入力処理</p></div>
                            <div><p>動作処理</p></div>
                        </div>
                    </div>
                </div>
                <div class="draw">
                    <p class="draw-text">センサ信号を直接CM3+に接続することでセンサがONしたら即座にモータ駆動させることが可能です。</p>
                    <div class="graph">
                        <div class="draw-sensor">
                            <div class="draw-sensor-box"><div class="sensor-box"></div><div class="sensor-line"></div></div>
                            <p>センサ</p>
                        </div>
                        <div class="line"></div>
                        <div class="">
                            <img class="kidou-draw-img" src="https://rin101.github.io/muscle-lp-test/assets/画像/CM3-17S-small.jpg" alt="">
                            <p style="text-align: center;font-weight: bold;">CM3+</p>
                        </div>
                    </div>
                    <div class="graph-text">
                        <div class="graph-text-item graph-text3">
                            <div><p>入力処理<br>1msec</p></div>
                            <div><p>動作処理</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="border"></div>
    <div class="conversation">
        <div class="question-container">
            <div class="customer-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="question">
                <p>伝送周期の速いMECHATROLINK-III（31.25μs）やEtherCAT(62.5μs)などと比較すると1msecの応答性は遅くないですか？</p>
            </div>
        </div>
        <div class="answer-container">
            <div class="answer">
                <p>伝送周期を高速に設定すると、PLCの処理能力に制限があるため、
                    接続できる軸数が限られてきます。</p>
                <p>また、高速処理させるためには高価なPLCが必要となり、装置のトータルコストが上がってしまいます。</p>
                <p>PLCの負担を最小限に抑え、CM3+による
                    ローカル高速応答制御を行うことで、
                    システム全体の効率化、コスト削減が可能となります。</p>
            </div>
            <div class="customer-service-icon">
                <i class="fas fa-user-tie"></i>
            </div>
        </div>
    </div>
    <div class="border"></div>
    <div class="cm3-container">
        <div class="big-image-texts">
            <h2>CM3+</h2>
            <h3>マイコン・ドライバ搭載</h3>
            <h3>サーボシステム</h3>
            <div class="double-p">
                <div class="">
                    <p>最高速度</p>
                    <p>5,000rpm</p>
                </div>
                <div class="">
                    <p>最大トルク</p>
                    <p>0.32Nm</p>
                </div>
            </div>
        </div>
        <div class="">
            <img src="https://rin101.github.io/muscle-lp-test/assets/画像/cm3.png" alt="">
        </div>
    </div>
    <div class="border"></div>
    <section class="CM3-IO-section ptp">
        <div class="section-title">
            <h3>PTP動作とプログラム動作の違い</h3>
        </div>
        <div class="ptp-content">
            <div class="draw">
                <p class="draw-title">PLCからPTPでモータを制御する場合、各位置決め完了毎にPLCで処理する必要があります</p>
                <div class="graph">
                    <div class="draw-sensor">
                        <div class="draw-sensor-box"><div class="sensor-box"></div><div class="sensor-line"></div></div>
                        <p>センサ</p>
                    </div>
                    <div class="line"></div>
                    <div class="plc-draw">
                        <div id="plc-box"><div><p>P</p><p>L</p><p>C</p></div></div>
                        <div class="plc-draw-box"><div></div></div>
                        <div class="plc-draw-box"><div></div></div>
                    </div>
                    <div class="line"></div>
                    <div class="plc-draw">
                        <div class="plc-driver"><div><p>ド</p><p>ラ</p><p>イ</p><p>バ</p></div></div>
                        <div class="plc-mota"><div class="mota-text"><p>モータ</p></div><div class="mota"></div></div>
                    </div>
                </div>
                <div class="ptp-graph-texts">
                    <div class=""></div>
                    <div class="ptp-graph-text">
                        <p>①ポイント1に移動指示</p>
                        <p>④ポイント1移動完了受付</p>
                        <p>⑤初期位置移動指示</p>
                        <p>⑧初期位置移動完了受付</p>
                    </div>
                    <div class="ptp-graph-text">
                        <p>②ポイント1に移動</p>
                        <p>③ポイント1移動完了</p>
                        <p>⑥初期位置に戻る</p>
                        <p>⑦初期位置移動完了</p>
                    </div>
                </div>
            </div>
            <div class="draw">
                <p class="draw-title">CM3+にプログラムを保持させることで、
                    起動信号を送るだけであとはCM3+が状況に応じた制御を行います</p>
                <div class="ptp-draw-bottom-container">
                    <div class="graph ptp-draw-bottom">
                        <div class="draw-sensor">
                            <div class="draw-sensor-box"><div class="sensor-box"></div><div class="sensor-line"></div></div>
                            <p>センサ</p>
                        </div>
                        <div class="line"></div>
                        <img class="kidou-draw-img" src="https://rin101.github.io/muscle-lp-test/assets/画像/CM3-17S-small.jpg" alt="">
                    </div>
                </div>
                <div class="ptp-graph-texts">
                    <div class=""></div>
                    <div class="ptp-graph-text">
                        <p>①ポイント1に移動</p>
                        <p>②初期位置に戻る</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="CM3-IO-section three">
        <h3>CM3+のプログラム機能（ロジックバンク）</h3>
        <div class="logic-graph">
            <div class="c-l">
                <div class="circle"><p>条件分岐処理</p></div>
            </div>
            <div class="x x1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></div>
            <div class="c-m">
                <div class="circle"><p>演算処理</p></div>
            </div>
            <div class="x x2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></div>
            <div class="c-r">
                <div class="circle"><p>モータ内部変数</p></div>
            </div>
            <div class="x equal-sign"><p>=</p></div>
            <div class="c-w">
                <div class="circle white-circle"><p><i class="fas fa-infinity"></i></p></div>
            </div>
            <div class="s-l">
                <div class="square">
                    <p>
                        &&：論理積(AND) <br>
                        ||：論理和(OR) <br>
                        !!：否定(NOT) <br>
                        ==：等しい <br>
                        !=：等しくない <br>
                        >：より大きい <br>
                        >=：以上 <br>
                        <：より小さい <br>
                        <=：以下 <br>
                        I：入力信号条件分岐 <br>
                    </p>
                </div>
            </div>
            <div class="s-m">
                <div class="square">
                    <p>
                        =：値の代入 <br>
                        +：加算 <br>
                        -：減算 <br>
                        *：乗算 <br>
                        /：除算 <br>
                        U1：Sin(サイン) <br>
                        U2：Cos(コサイン) <br>
                        U3：平方根 <br>
                    </p>
                </div>
            </div>
            <div class="s-r">
                <div class="square">
                    <p>
                        V：変数 <br>
                        Px：現在位置 <br>
                        Sx：現在速度 <br>
                        Ix：現在トルク <br>
                        Ux：現在のステータス <br>
                        Pe：位置偏差 <br>
                        PT：目標位置 <br>
                        ST：目標速度 <br>
                    </p>
                </div>
            </div>
            <div class="s-w">
                <div class="square square-white">
                    <p>
                        [：プログラム実行<br>
                        ]：停止<br>
                        )：モータフリー<br>
                        (：フリー解除<br>
                        O：出力ON <br>
                        F：出力OFF <br>
                        S=：速度変更<br>
                        ?99：ステータス表示<br>
                        ・・・<br>
                    </p>
                </div>
            </div>
        </div>
        <p class="three-text">モータ内部のマイコンを使用することで動作状況や外部環境に応じた条件分岐処理、演算処理が可能となりより幅広い制御開発が可能となります。</p>
        <p class="three-text-little">※CM3+には位置決めなどの動作シーケンスプログラム（モーションバンク）と条件分岐処理や演算処理を周期的に実行するプログラム（ロジックバンク）の2種類があり、2つのプログラムを同時に実行することができます。</p>
    </section>
    <section class="CM3-IO-section mota-dousa">
        <div class="section-title">
            <h3>モータ動作の高速化</h3>
        </div>
        <div class="mota-dousa-text">
            <p>CM3+はステッピングモータをサーボ制御することでサーボ性能を安価に実現しています。</p>
            <p>ステッピングモータは通常高加速制御をすると脱調するので、高加減速での用途には使用できませんが
                CM3+は脱調レスにより、<br>加速トルクをフルに使用することができます。</p>
        </div>
        <div class="conversation">
            <div class="question-container">
                <div class="customer-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="question">
                    <p>サーボと比較するとどちらが速いですか？</p>
                </div>
            </div>
            <div class="answer-container">
                <div class="answer">
                    <p>使用する最高速度によりますが、移動距離の少ない高速往復動作が必要な
                        アプリケーションであれば低速域で十分な加速トルクを使用することが
                        できるためサーボモータと同等の性能が発揮できます。</p>
                </div>
                <div class="customer-service-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
            </div>
        </div>
        <div class="border"></div>
        <div class="mota-dousa-graph-container">
            <div class="mota-dousa-graph" id="mota-graph1">
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/CM3-17S.jpg" alt="">
                <h4 class="mota-dousa-title">CM3+-17S50A</h4>
                <div class="mota-graph-text">
                    <div class="">
                        <p>最高速度</p>
                        <p>5,000rpm</p>
                    </div>
                    <div class="">
                        <p>最大トルク</p>
                        <p>0.32Nm</p>
                    </div>
                </div>
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota-dousa-hyou1.png" alt="">
                <div class="mota-dousa-hyou">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>モータサイズ[mm]</th>
                                <th>42</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>モータ出力[w]</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>パルス指令分解能</td>
                                <td>300～12,00[pulse/回転]から選択可</td>
                            </tr>
                            <tr>
                                <td>重量[g]</td>
                                <td>295</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mota-dousa-graph" id="mota-graph2">
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota2.png" alt="">
                <h4 class="mota-dousa-title">CM3+-17L50A</h4>
                <div class="mota-graph-text">
                    <div class="">
                        <p>最高速度</p>
                        <p>5,000rpm</p>
                    </div>
                    <div class="">
                        <p>最大トルク</p>
                        <p>0.65Nm</p>
                    </div>
                </div>
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota-dousa-hyou2.png" alt="">
                <div class="mota-dousa-hyou">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>モータサイズ[mm]</th>
                                <th>42</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>モータ出力[w]</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>パルス指令分解能</td>
                                <td>300～12,00[pulse/回転]から選択可</td>
                            </tr>
                            <tr>
                                <td>重量[g]</td>
                                <td>435</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mota-dousa-graph" id="mota-graph3">
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota3.png" alt="">
                <h4 class="mota-dousa-title">CM3+-23S50A</h4>
                <div class="mota-graph-text">
                    <div class="">
                        <p>最高速度</p>
                        <p>5,000rpm</p>
                    </div>
                    <div class="">
                        <p>最大トルク</p>
                        <p>0.45Nm</p>
                    </div>
                </div>
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota-dousa-hyou3.png" alt="">
                <div class="mota-dousa-hyou">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>モータサイズ[mm]</th>
                                <th>42</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>モータ出力[w]</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>パルス指令分解能</td>
                                <td>300～12,00[pulse/回転]から選択可</td>
                            </tr>
                            <tr>
                                <td>重量[g]</td>
                                <td>525</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mota-dousa-graph" id="mota-graph4">
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota4.png" alt="">
                <h4 class="mota-dousa-title">CM3+-23L50A</h4>
                <div class="mota-graph-text">
                    <div class="">
                        <p>最高速度</p>
                        <p>5,000rpm</p>
                    </div>
                    <div class="">
                        <p>最大トルク</p>
                        <p>1.50Nm</p>
                    </div>
                </div>
                <img src="https://rin101.github.io/muscle-lp-test/assets/画像/mota-dousa-hyou4.png" alt="">
                <div class="mota-dousa-hyou">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>モータサイズ[mm]</th>
                                <th>42</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>モータ出力[w]</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>パルス指令分解能</td>
                                <td>300～12,00[pulse/回転]から選択可</td>
                            </tr>
                            <tr>
                                <td>重量[g]</td>
                                <td>1050</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="CM3-PC-section CM3-PC-footer">
        <div class="CM3-PC-footer-container">
            <img class="catalog-img" src="https://rin101.github.io/muscle-lp-test/assets/画像/pic_last02.png" alt="">
            <div class="CM3-PC-footer-buttons">
                <div class="see-product-container">
                    <a class="CM3-PC-a see-product" href="https://musclecorp.com/motion/cm3-top/">
                        <p><i class="fas fa-external-link-alt"></i> CM３製品概要を見る</p>
                    </a>
                </div>
                <div class="catalog-download-container">
                    <a class="CM3-PC-a catalog-download" href="https://musclecorp.com/motion/coolmuscle3newcatalog/">
                        <p><i class="fas fa-download"></i> カタログダウンロード</p>
                    </a>
                </div>
                <div class="contact-container">
                    <a class="CM3-PC-a contact" href="https://musclecorp.com/motion/contactus/">
                        <p class="contact-title">お問い合わせ</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-top-nav">
            <a href="https://musclecorp.com/motion/" class="footer-top-a">COOL MUSCLE TOP</a>
            <a href="https://musclecorp.com/motion/cm1-top/" class="footer-top-a">COOL MUSCLE1 製品情報</a>
            <a href="https://musclecorp.com/motion/cm2-top/" class="footer-top-a">COOL MUSCLE2 製品情報</a>
            <a href="https://musclecorp.com/motion/cm3-top/" class="footer-top-a">COOL MUSCLE3 製品情報</a>
            <a href="https://musclecorp.com/motion/contactus/" class="footer-top-a">お問い合わせ</a>
        </div>
        <div class="footer-bottom-nav-container">
            <div class="footer-bottom-nav">
                <a href="https://musclecorp.com/about/" class="footer-bottom-a">会社概要</a>
                <a href="https://musclecorp.com/privacypolicy/" class="footer-bottom-a">プライバシーポリシー</a>
                <a href="https://musclecorp.com/recruit/" class="footer-bottom-a">採用情報</a>
                <a href="https://musclecorp.com/motion/" class="footer-bottom-a">モーション</a>
                <a href="https://www.musclerobo.com/" class="footer-bottom-a">ヘルプ</a>
                <a href="https://www.youtube.com/playlist?list=PLj0TBfOfUMfocIsBbTKC2OERpZMNbAQ3F" class="footer-bottom-a">ロボット</a>
            </div>
        </div>
        <div class="footer-logo-container">
            <div class="footer-logo">
                <a href="https://musclecorp.com">
                    <img src="https://musclecorp.com/motion/wp-content/themes/muscletestm/img/footer-logo.svg" alt="">
                </a>
            </div>
            <div class="footer-copyright">
                <p>© Copyright MUSCLE Corporation All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        const scrollButton = document.querySelector('.scroll-up-button')

        window.onscroll = () => {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.style.display = "flex"
                scrollButton.style.animation = "slidein ease-in-out 0.2s"
            } else {
                scrollButton.style.animation = "slideout ease-in-out 0.2s"
                scrollButton.style.display = "none"
            }
        }


        scrollButton.addEventListener("click", () => {
            document.body.scrollTop = 0
            document.documentElement.scrollTop = 0
        })
    </script>
</body>
</html>
