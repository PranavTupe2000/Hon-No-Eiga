<?php
include("seatServer.php");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Screen</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2><?php echo $movie_name;?></h2>
    <h4><?php echo $movie_language."-".$movie_dimension;?></h4>
    <i>Cost per seat: <?php echo $movie_cost;?></i>
    <form method="POST">
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <p>1</p>
            </div>
            <div class="col">
                <p>2</p>
            </div>
            <div class="col">
                <p>3</p>
            </div>
            <div class="col">
                <p>4</p>
            </div>
            <div class="col">
                <p></p>
            </div>
            <div class="col">
                <p>5</p>
            </div>
            <div class="col">
                <p>6</p>
            </div>
            <div class="col">
                <p>7</p>
            </div>
            <div class="col">
                <p>8</p>
            </div>
            <div class="col">
                <p>9</p>
            </div>
            <div class="col">
                <p>10</p>
            </div>
            <div class="col">
                <p>11</p>
            </div>
            <div class="col">
                <p>12</p>
            </div>
            <div class="col">
                <p>13</p>
            </div>
            <div class="col">
                <p>14</p>
            </div>
            <div class="col">
                <p>15</p>
            </div>
            <div class="col">
                <p>16</p>
            </div>
            <div class="col">
                <p>17</p>
            </div>
            <div class="col">
                <p>18</p>
            </div>
            <div class="col">
                <p></p>
            </div>
            <div class="col">
                <p>19</p>
            </div>
            <div class="col">
                <p>20</p>
            </div>
            <div class="col">
                <p>21</p>
            </div>
            <div class="col">
                <p>22</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>A</p>
            </div>
            <div class="col"><input type="checkbox" id="a1" name="a1"></div>
            <div class="col"><input type="checkbox" id="a2" name="a2"></div>
            <div class="col"><input type="checkbox" id="a3" name="a3"></div>
            <div class="col"><input type="checkbox" id="a4" name="a4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" id="a5" name="a5"></div>
            <div class="col"><input type="checkbox" id="a6" name="a6"></div>
            <div class="col"><input type="checkbox" id="a7" name="a7"></div>
            <div class="col"><input type="checkbox" id="a8" name="a8"></div>
            <div class="col"><input type="checkbox" id="a9" name="a9"></div>
            <div class="col"><input type="checkbox" id="a10" name="a10"></div>
            <div class="col"><input type="checkbox" id="a11" name="a11"></div>
            <div class="col"><input type="checkbox" id="a12" name="a12"></div>
            <div class="col"><input type="checkbox" id="a13" name="a13"></div>
            <div class="col"><input type="checkbox" id="a14" name="a14"></div>
            <div class="col"><input type="checkbox" id="a15" name="a15"></div>
            <div class="col"><input type="checkbox" id="a16" name="a16"></div>
            <div class="col"><input type="checkbox" id="a17" name="a17"></div>
            <div class="col"><input type="checkbox" id="a18" name="a18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" id="a19" name="a19"></div>
            <div class="col"><input type="checkbox" id="a20" name="a20"></div>
            <div class="col"><input type="checkbox" id="a21" name="a21"></div>
            <div class="col"><input type="checkbox" id="a22" name="a22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>B</p>
            </div>
            <div class="col"><input type="checkbox" name="b1"></div>
            <div class="col"><input type="checkbox" name="b2"></div>
            <div class="col"><input type="checkbox" name="b3"></div>
            <div class="col"><input type="checkbox" name="b4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="b5"></div>
            <div class="col"><input type="checkbox" name="b6"></div>
            <div class="col"><input type="checkbox" name="b7"></div>
            <div class="col"><input type="checkbox" name="b8"></div>
            <div class="col"><input type="checkbox" name="b9"></div>
            <div class="col"><input type="checkbox" name="b10"></div>
            <div class="col"><input type="checkbox" name="b11"></div>
            <div class="col"><input type="checkbox" name="b12"></div>
            <div class="col"><input type="checkbox" name="b13"></div>
            <div class="col"><input type="checkbox" name="b14"></div>
            <div class="col"><input type="checkbox" name="b15"></div>
            <div class="col"><input type="checkbox" name="b16"></div>
            <div class="col"><input type="checkbox" name="b17"></div>
            <div class="col"><input type="checkbox" name="b18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="b19"></div>
            <div class="col"><input type="checkbox" name="b20"></div>
            <div class="col"><input type="checkbox" name="b21"></div>
            <div class="col"><input type="checkbox" name="b22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>C</p>
            </div>
            <div class="col"><input type="checkbox" name="c1"></div>
            <div class="col"><input type="checkbox" name="c2"></div>
            <div class="col"><input type="checkbox" name="c3"></div>
            <div class="col"><input type="checkbox" name="c4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="c5"></div>
            <div class="col"><input type="checkbox" name="c6"></div>
            <div class="col"><input type="checkbox" name="c7"></div>
            <div class="col"><input type="checkbox" name="c8"></div>
            <div class="col"><input type="checkbox" name="c9"></div>
            <div class="col"><input type="checkbox" name="c10"></div>
            <div class="col"><input type="checkbox" name="c11"></div>
            <div class="col"><input type="checkbox" name="c12"></div>
            <div class="col"><input type="checkbox" name="c13"></div>
            <div class="col"><input type="checkbox" name="c14"></div>
            <div class="col"><input type="checkbox" name="c15"></div>
            <div class="col"><input type="checkbox" name="c16"></div>
            <div class="col"><input type="checkbox" name="c17"></div>
            <div class="col"><input type="checkbox" name="c18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="c19"></div>
            <div class="col"><input type="checkbox" name="c20"></div>
            <div class="col"><input type="checkbox" name="c21"></div>
            <div class="col"><input type="checkbox" name="c22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>D</p>
            </div>
            <div class="col"><input type="checkbox" name="d1"></div>
            <div class="col"><input type="checkbox" name="d2"></div>
            <div class="col"><input type="checkbox" name="d3"></div>
            <div class="col"><input type="checkbox" name="d4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="d5"></div>
            <div class="col"><input type="checkbox" name="d6"></div>
            <div class="col"><input type="checkbox" name="d7"></div>
            <div class="col"><input type="checkbox" name="d8"></div>
            <div class="col"><input type="checkbox" name="d9"></div>
            <div class="col"><input type="checkbox" name="d10"></div>
            <div class="col"><input type="checkbox" name="d11"></div>
            <div class="col"><input type="checkbox" name="d12"></div>
            <div class="col"><input type="checkbox" name="d13"></div>
            <div class="col"><input type="checkbox" name="d14"></div>
            <div class="col"><input type="checkbox" name="d15"></div>
            <div class="col"><input type="checkbox" name="d16"></div>
            <div class="col"><input type="checkbox" name="d17"></div>
            <div class="col"><input type="checkbox" name="d18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="d19"></div>
            <div class="col"><input type="checkbox" name="d20"></div>
            <div class="col"><input type="checkbox" name="d21"></div>
            <div class="col"><input type="checkbox" name="d22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>E</p>
            </div>
            <div class="col"><input type="checkbox" name="e1"></div>
            <div class="col"><input type="checkbox" name="e2"></div>
            <div class="col"><input type="checkbox" name="e3"></div>
            <div class="col"><input type="checkbox" name="e4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="e5"></div>
            <div class="col"><input type="checkbox" name="e6"></div>
            <div class="col"><input type="checkbox" name="e7"></div>
            <div class="col"><input type="checkbox" name="e8"></div>
            <div class="col"><input type="checkbox" name="e9"></div>
            <div class="col"><input type="checkbox" name="e10"></div>
            <div class="col"><input type="checkbox" name="e11"></div>
            <div class="col"><input type="checkbox" name="e12"></div>
            <div class="col"><input type="checkbox" name="e13"></div>
            <div class="col"><input type="checkbox" name="e14"></div>
            <div class="col"><input type="checkbox" name="e15"></div>
            <div class="col"><input type="checkbox" name="e16"></div>
            <div class="col"><input type="checkbox" name="e17"></div>
            <div class="col"><input type="checkbox" name="e18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="e19"></div>
            <div class="col"><input type="checkbox" name="e20"></div>
            <div class="col"><input type="checkbox" name="e21"></div>
            <div class="col"><input type="checkbox" name="e22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>F</p>
            </div>
            <div class="col"><input type="checkbox" name="f1"></div>
            <div class="col"><input type="checkbox" name="f2"></div>
            <div class="col"><input type="checkbox" name="f3"></div>
            <div class="col"><input type="checkbox" name="f4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="f5"></div>
            <div class="col"><input type="checkbox" name="f6"></div>
            <div class="col"><input type="checkbox" name="f7"></div>
            <div class="col"><input type="checkbox" name="f8"></div>
            <div class="col"><input type="checkbox" name="f9"></div>
            <div class="col"><input type="checkbox" name="f10"></div>
            <div class="col"><input type="checkbox" name="f11"></div>
            <div class="col"><input type="checkbox" name="f12"></div>
            <div class="col"><input type="checkbox" name="f13"></div>
            <div class="col"><input type="checkbox" name="f14"></div>
            <div class="col"><input type="checkbox" name="f15"></div>
            <div class="col"><input type="checkbox" name="f16"></div>
            <div class="col"><input type="checkbox" name="f17"></div>
            <div class="col"><input type="checkbox" name="f18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="f19"></div>
            <div class="col"><input type="checkbox" name="f20"></div>
            <div class="col"><input type="checkbox" name="f21"></div>
            <div class="col"><input type="checkbox" name="f22"></div>
            <div class="col"></div>
        </div>
        
        <div class="row">
            <div class="col">
                <p>G</p>
            </div>
            <div class="col"><input type="checkbox" name="g1"></div>
            <div class="col"><input type="checkbox" name="g2"></div>
            <div class="col"><input type="checkbox" name="g3"></div>
            <div class="col"><input type="checkbox" name="g4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="g5"></div>
            <div class="col"><input type="checkbox" name="g6"></div>
            <div class="col"><input type="checkbox" name="g7"></div>
            <div class="col"><input type="checkbox" name="g8"></div>
            <div class="col"><input type="checkbox" name="g9"></div>
            <div class="col"><input type="checkbox" name="g10"></div>
            <div class="col"><input type="checkbox" name="g11"></div>
            <div class="col"><input type="checkbox" name="g12"></div>
            <div class="col"><input type="checkbox" name="g13"></div>
            <div class="col"><input type="checkbox" name="g14"></div>
            <div class="col"><input type="checkbox" name="g15"></div>
            <div class="col"><input type="checkbox" name="g16"></div>
            <div class="col"><input type="checkbox" name="g17"></div>
            <div class="col"><input type="checkbox" name="g18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="g19"></div>
            <div class="col"><input type="checkbox" name="g20"></div>
            <div class="col"><input type="checkbox" name="g21"></div>
            <div class="col"><input type="checkbox" name="g22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>H</p>
            </div>
            <div class="col"><input type="checkbox" name="h1"></div>
            <div class="col"><input type="checkbox" name="h2"></div>
            <div class="col"><input type="checkbox" name="h3"></div>
            <div class="col"><input type="checkbox" name="h4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="h5"></div>
            <div class="col"><input type="checkbox" name="h6"></div>
            <div class="col"><input type="checkbox" name="h7"></div>
            <div class="col"><input type="checkbox" name="h8"></div>
            <div class="col"><input type="checkbox" name="h9"></div>
            <div class="col"><input type="checkbox" name="h10"></div>
            <div class="col"><input type="checkbox" name="h11"></div>
            <div class="col"><input type="checkbox" name="h12"></div>
            <div class="col"><input type="checkbox" name="h13"></div>
            <div class="col"><input type="checkbox" name="h14"></div>
            <div class="col"><input type="checkbox" name="h15"></div>
            <div class="col"><input type="checkbox" name="h16"></div>
            <div class="col"><input type="checkbox" name="h17"></div>
            <div class="col"><input type="checkbox" name="h18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="h19"></div>
            <div class="col"><input type="checkbox" name="h20"></div>
            <div class="col"><input type="checkbox" name="h21"></div>
            <div class="col"><input type="checkbox" name="h22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>I</p>
            </div>
            <div class="col"><input type="checkbox" name="i1"></div>
            <div class="col"><input type="checkbox" name="i2"></div>
            <div class="col"><input type="checkbox" name="i3"></div>
            <div class="col"><input type="checkbox" name="i4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="i5"></div>
            <div class="col"><input type="checkbox" name="i6"></div>
            <div class="col"><input type="checkbox" name="i7"></div>
            <div class="col"><input type="checkbox" name="i8"></div>
            <div class="col"><input type="checkbox" name="i9"></div>
            <div class="col"><input type="checkbox" name="i10"></div>
            <div class="col"><input type="checkbox" name="i11"></div>
            <div class="col"><input type="checkbox" name="i12"></div>
            <div class="col"><input type="checkbox" name="i13"></div>
            <div class="col"><input type="checkbox" name="i14"></div>
            <div class="col"><input type="checkbox" name="i15"></div>
            <div class="col"><input type="checkbox" name="i16"></div>
            <div class="col"><input type="checkbox" name="i17"></div>
            <div class="col"><input type="checkbox" name="i18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="i19"></div>
            <div class="col"><input type="checkbox" name="i20"></div>
            <div class="col"><input type="checkbox" name="i21"></div>
            <div class="col"><input type="checkbox" name="i22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>J</p>
            </div>
            <div class="col"><input type="checkbox" name="j1"></div>
            <div class="col"><input type="checkbox" name="j2"></div>
            <div class="col"><input type="checkbox" name="j3"></div>
            <div class="col"><input type="checkbox" name="j4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="j5"></div>
            <div class="col"><input type="checkbox" name="j6"></div>
            <div class="col"><input type="checkbox" name="j7"></div>
            <div class="col"><input type="checkbox" name="j8"></div>
            <div class="col"><input type="checkbox" name="j9"></div>
            <div class="col"><input type="checkbox" name="j10"></div>
            <div class="col"><input type="checkbox" name="j11"></div>
            <div class="col"><input type="checkbox" name="j12"></div>
            <div class="col"><input type="checkbox" name="j13"></div>
            <div class="col"><input type="checkbox" name="j14"></div>
            <div class="col"><input type="checkbox" name="j15"></div>
            <div class="col"><input type="checkbox" name="j16"></div>
            <div class="col"><input type="checkbox" name="j17"></div>
            <div class="col"><input type="checkbox" name="j18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="j19"></div>
            <div class="col"><input type="checkbox" name="j20"></div>
            <div class="col"><input type="checkbox" name="j21"></div>
            <div class="col"><input type="checkbox" name="j22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>K</p>
            </div>
            <div class="col"><input type="checkbox" name="k1"></div>
            <div class="col"><input type="checkbox" name="k2"></div>
            <div class="col"><input type="checkbox" name="k3"></div>
            <div class="col"><input type="checkbox" name="k4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="k5"></div>
            <div class="col"><input type="checkbox" name="k6"></div>
            <div class="col"><input type="checkbox" name="k7"></div>
            <div class="col"><input type="checkbox" name="k8"></div>
            <div class="col"><input type="checkbox" name="k9"></div>
            <div class="col"><input type="checkbox" name="k10"></div>
            <div class="col"><input type="checkbox" name="k11"></div>
            <div class="col"><input type="checkbox" name="k12"></div>
            <div class="col"><input type="checkbox" name="k13"></div>
            <div class="col"><input type="checkbox" name="k14"></div>
            <div class="col"><input type="checkbox" name="k15"></div>
            <div class="col"><input type="checkbox" name="k16"></div>
            <div class="col"><input type="checkbox" name="k17"></div>
            <div class="col"><input type="checkbox" name="k18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="k19"></div>
            <div class="col"><input type="checkbox" name="k20"></div>
            <div class="col"><input type="checkbox" name="k21"></div>
            <div class="col"><input type="checkbox" name="k22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>L</p>
            </div>
            <div class="col"><input type="checkbox" name="l1"></div>
            <div class="col"><input type="checkbox" name="l2"></div>
            <div class="col"><input type="checkbox" name="l3"></div>
            <div class="col"><input type="checkbox" name="l4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="l5"></div>
            <div class="col"><input type="checkbox" name="l6"></div>
            <div class="col"><input type="checkbox" name="l7"></div>
            <div class="col"><input type="checkbox" name="l8"></div>
            <div class="col"><input type="checkbox" name="l9"></div>
            <div class="col"><input type="checkbox" name="l10"></div>
            <div class="col"><input type="checkbox" name="l11"></div>
            <div class="col"><input type="checkbox" name="l12"></div>
            <div class="col"><input type="checkbox" name="l13"></div>
            <div class="col"><input type="checkbox" name="l14"></div>
            <div class="col"><input type="checkbox" name="l15"></div>
            <div class="col"><input type="checkbox" name="l16"></div>
            <div class="col"><input type="checkbox" name="l17"></div>
            <div class="col"><input type="checkbox" name="l18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="l19"></div>
            <div class="col"><input type="checkbox" name="l20"></div>
            <div class="col"><input type="checkbox" name="l21"></div>
            <div class="col"><input type="checkbox" name="l22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>M</p>
            </div>
            <div class="col"><input type="checkbox" name="m1"></div>
            <div class="col"><input type="checkbox" name="m2"></div>
            <div class="col"><input type="checkbox" name="m3"></div>
            <div class="col"><input type="checkbox" name="m4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="m5"></div>
            <div class="col"><input type="checkbox" name="m6"></div>
            <div class="col"><input type="checkbox" name="m7"></div>
            <div class="col"><input type="checkbox" name="m8"></div>
            <div class="col"><input type="checkbox" name="m9"></div>
            <div class="col"><input type="checkbox" name="m10"></div>
            <div class="col"><input type="checkbox" name="m11"></div>
            <div class="col"><input type="checkbox" name="m12"></div>
            <div class="col"><input type="checkbox" name="m13"></div>
            <div class="col"><input type="checkbox" name="m14"></div>
            <div class="col"><input type="checkbox" name="m15"></div>
            <div class="col"><input type="checkbox" name="m16"></div>
            <div class="col"><input type="checkbox" name="m17"></div>
            <div class="col"><input type="checkbox" name="m18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="m19"></div>
            <div class="col"><input type="checkbox" name="m20"></div>
            <div class="col"><input type="checkbox" name="m21"></div>
            <div class="col"><input type="checkbox" name="m22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>N</p>
            </div>
            <div class="col"><input type="checkbox" name="n1"></div>
            <div class="col"><input type="checkbox" name="n2"></div>
            <div class="col"><input type="checkbox" name="n3"></div>
            <div class="col"><input type="checkbox" name="n4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="n5"></div>
            <div class="col"><input type="checkbox" name="n6"></div>
            <div class="col"><input type="checkbox" name="n7"></div>
            <div class="col"><input type="checkbox" name="n8"></div>
            <div class="col"><input type="checkbox" name="n9"></div>
            <div class="col"><input type="checkbox" name="n10"></div>
            <div class="col"><input type="checkbox" name="n11"></div>
            <div class="col"><input type="checkbox" name="n12"></div>
            <div class="col"><input type="checkbox" name="n13"></div>
            <div class="col"><input type="checkbox" name="n14"></div>
            <div class="col"><input type="checkbox" name="n15"></div>
            <div class="col"><input type="checkbox" name="n16"></div>
            <div class="col"><input type="checkbox" name="n17"></div>
            <div class="col"><input type="checkbox" name="n18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="n19"></div>
            <div class="col"><input type="checkbox" name="n20"></div>
            <div class="col"><input type="checkbox" name="n21"></div>
            <div class="col"><input type="checkbox" name="n22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>O</p>
            </div>
            <div class="col"><input type="checkbox" name="o1"></div>
            <div class="col"><input type="checkbox" name="o2"></div>
            <div class="col"><input type="checkbox" name="o3"></div>
            <div class="col"><input type="checkbox" name="o4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="o5"></div>
            <div class="col"><input type="checkbox" name="o6"></div>
            <div class="col"><input type="checkbox" name="o7"></div>
            <div class="col"><input type="checkbox" name="o8"></div>
            <div class="col"><input type="checkbox" name="o9"></div>
            <div class="col"><input type="checkbox" name="o10"></div>
            <div class="col"><input type="checkbox" name="o11"></div>
            <div class="col"><input type="checkbox" name="o12"></div>
            <div class="col"><input type="checkbox" name="o13"></div>
            <div class="col"><input type="checkbox" name="o14"></div>
            <div class="col"><input type="checkbox" name="o15"></div>
            <div class="col"><input type="checkbox" name="o16"></div>
            <div class="col"><input type="checkbox" name="o17"></div>
            <div class="col"><input type="checkbox" name="o18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="o19"></div>
            <div class="col"><input type="checkbox" name="o20"></div>
            <div class="col"><input type="checkbox" name="o21"></div>
            <div class="col"><input type="checkbox" name="o22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>P</p>
            </div>
            <div class="col"><input type="checkbox" name="p1"></div>
            <div class="col"><input type="checkbox" name="p2"></div>
            <div class="col"><input type="checkbox" name="p3"></div>
            <div class="col"><input type="checkbox" name="p4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="p5"></div>
            <div class="col"><input type="checkbox" name="p6"></div>
            <div class="col"><input type="checkbox" name="p7"></div>
            <div class="col"><input type="checkbox" name="p8"></div>
            <div class="col"><input type="checkbox" name="p9"></div>
            <div class="col"><input type="checkbox" name="p10"></div>
            <div class="col"><input type="checkbox" name="p11"></div>
            <div class="col"><input type="checkbox" name="p12"></div>
            <div class="col"><input type="checkbox" name="p13"></div>
            <div class="col"><input type="checkbox" name="p14"></div>
            <div class="col"><input type="checkbox" name="p15"></div>
            <div class="col"><input type="checkbox" name="p16"></div>
            <div class="col"><input type="checkbox" name="p17"></div>
            <div class="col"><input type="checkbox" name="p18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="p19"></div>
            <div class="col"><input type="checkbox" name="p20"></div>
            <div class="col"><input type="checkbox" name="p21"></div>
            <div class="col"><input type="checkbox" name="p22"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col">
                <p>Q</p>
            </div>
            <div class="col"><input type="checkbox" name="q1"></div>
            <div class="col"><input type="checkbox" name="q2"></div>
            <div class="col"><input type="checkbox" name="q3"></div>
            <div class="col"><input type="checkbox" name="q4"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="q5"></div>
            <div class="col"><input type="checkbox" name="q6"></div>
            <div class="col"><input type="checkbox" name="q7"></div>
            <div class="col"><input type="checkbox" name="q8"></div>
            <div class="col"><input type="checkbox" name="q9"></div>
            <div class="col"><input type="checkbox" name="q10"></div>
            <div class="col"><input type="checkbox" name="q11"></div>
            <div class="col"><input type="checkbox" name="q12"></div>
            <div class="col"><input type="checkbox" name="q13"></div>
            <div class="col"><input type="checkbox" name="q14"></div>
            <div class="col"><input type="checkbox" name="q15"></div>
            <div class="col"><input type="checkbox" name="q16"></div>
            <div class="col"><input type="checkbox" name="q17"></div>
            <div class="col"><input type="checkbox" name="q18"></div>
            <div class="col" style="width: 90px;"></div>
            <div class="col"><input type="checkbox" name="q19"></div>
            <div class="col"><input type="checkbox" name="q20"></div>
            <div class="col"><input type="checkbox" name="q21"></div>
            <div class="col"><input type="checkbox" name="q22"></div>
            <div class="col"></div>
        </div>
    </div>
    <p>Screen this side</p><img src="img/Screen.png">
    <div class="container" id="buttons"><button class="btn btn-primary" type="reset">Clear</button><button class="btn btn-primary" type="submit" onclick="show_alert();">Book&nbsp;</button></div>
    </form>
</body>
<script type="text/javascript"> 
    
    function show_alert() {
        alert("Do you want to confirm the purchase");
       // window.location = "index";
    }
   
</script>
<?php
if(empty($booked)){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $seatString="-";
        $count = 0;
        foreach($_POST as $key=>$value){
            array_push($booked,$key);
            $seatString = $seatString.$key."-";
            $count++;
         }
        $seats->insertOne(['show_id'=> $show_id,'booked'=>$booked]);
        //header("location: index.php"); 
        $total_cost = $count*$movie_cost;
        $purchase_id = md5($user_id.$show_id.$seatString);
        $_SESSION['p_id']=$purchase_id;
        $query2 = "INSERT INTO purchases VALUES('$purchase_id',$show_id,'$user_id','$seatString',$total_cost);";
        $ok = mysqli_query($db,$query2);
    }
    
}else{
   // var_dump($record);
    echo '<script>';
        foreach($booked as $dis):?>
            $("input[name='<?php echo $dis?>']").prop("disabled", true);
        <?php endforeach;
    echo '</script>';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $seatString="-";
        $count = 0;
        foreach($_POST as $key=>$value){
            $seats->updateOne(['show_id'=> $show_id],['$push' => ['booked' => $key]]);
            $seatString = $seatString.$key."-";
            $count++;
        }
         //header("location: index.php"); 
        $total_cost = $count*$movie_cost;
        $purchase_id = md5($user_id.$show_id.$seatString);
        $_SESSION['p_id']=$purchase_id;
        $query2 = "INSERT INTO purchases VALUES('$purchase_id',$show_id,'$user_id','$seatString',$total_cost);";
        $ok = mysqli_query($db,$query2);
        }
}
?>
</html>