<!--
Luke Black 
Ec1405935@edinburghcollege.ac.uk
20th May 2019-->

<!doctype html>

<html lang="en">
<?php 
include('includes/headerin.html');
?>
<style>
*
{
  margin: 0;
  padding: 0;
  outline: none;
}

body
{
  font-family: 'Roboto', sans-serif;
  background: #a9d878;
}

.container
{
  width: 360px;
  margin: 15px auto;
}

.app
{
  width: 360px;
  height: 600px;
  background: #f8f8f8;
  border-left: 11px solid #034693;
  border-right: 11px solid #e89e01;

  box-shadow: 0 60px 45px -50px rgba(0,0,0,0.25),
              0 -50px 45px -50px rgba(0,0,0,0.15);
}

div.header
{
  position: relative;
  width: 100%;
  height: 140px;
}

span.team
{
  position: relative;
  width: 45%;
  height: 100%;
  display: inline-block;
  text-align: center;
}

span.team-left
{
  float: left;
}

span.team-right
{
  float: right;
}

span.team span.name
{
  width: 70%;
  display: block;
  text-transform: uppercase;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  color: rgba(0,0,0,0.8);
  padding: 5% 15% 0% 15%;
}

span.score
{
  position: absolute;
  width: 100%;
  height: 100%;
  display: inline-block;
  left: 0;
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  letter-spacing: 2px;
  color: rgba(0,0,0,0.8);
  line-height: 110px;
}

span.team img.logo
{
  width: 70px;
  margin-top: 20px;
}

span.team span.stats
{
  width: 100%;
  display: block;
  font-size: 9px;
  font-weight: 900;
  color: rgba(0,0,0,0.25);
}

div.body
{
  position: relative;
}

div.time
{
  text-align: center;
}

div.time span.text
{
  width: 100%;
  display: block;
  text-align: center;
  font-size: 35px;
  font-weight: 300;
}

div.time span.time-bar
{
  position: relative;
  width: 85%;
  height: 7px;
  display: inline-block;
  background: rgba(0,0,0,0.07);
  border-radius: 100px;
  overflow: hidden;
  box-shadow: 1px 1px 0px rgba(0,0,0,0.1);
}

span.time-bar span.progress
{
  position: absolute;
  width: 81%;
  height: 100%;
  display: inline-block;

  background: #ffd65e;
  background: -moz-linear-gradient(left,  #ffd65e 0%, #febf04 100%);
  background: -webkit-linear-gradient(left,  #ffd65e 0%,#febf04 100%);
  background: linear-gradient(to right,  #ffd65e 0%,#febf04 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffd65e', endColorstr='#febf04',GradientType=1 );

  left: 0;
  opacity: 0.7;
}

.match-stats
{
  margin-top: 25px;
}

.match-stats .stats
{
  position: relative;
  margin-bottom: 20px;
}

.match-stats .stats > span
{
  width: 30%;
  height: auto;
  display: inline-block;
}

.match-stats .stats > span:nth-child(1)
{
  float: left;
  margin-left: 60px;
  font-size: 11px;
  font-weight: bold;
  color: rgba(0,0,0,0.4);
  margin-top: 2px;
}

.match-stats .stats > span:nth-child(2)
{
  float: right;
  margin-right: 20px;
  font-size: 11px;
  font-weight: bold;
  color: rgba(0,0,0,0.4);
  margin-top: 2px;
}

.match-stats .stats span.name
{
  display: block;
  margin-bottom: 5px;
  color: rgba(0,0,0,0.45);
  font-weight: 900;
}

.match-stats .stats:after
{
  content: '';
  display: table;
  clear: both;
}

img.player
{
  position: absolute;
  width: 30px;
  height: 30px;
  border-radius: 100%;
  left: 50%;
  margin-left: -20px;
  margin-top: -10px;
  border: 5px solid #fff;
}

.match-stats .stats span:nth-child(1) i
{
  position: absolute;
  margin-left: -25px;
  margin-top: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.match-stats .stats span:nth-child(2) i
{
  position: absolute;
  margin-left: 15px;
  margin-top: 1px;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

i.card
{
  position: absolute;
  width: 9px;
  height: 14px;
  display: inline-block;
  background: grey;
  margin-left: -25px;
  margin-top: -1px !important;
  box-shadow: 1px 1px 1px rgba(0,0,0,0.2);
}

.match-stats .stats .stat-time
{
  display: block;
  margin-top: 5px;
  font-weight: 400;
}

span.sec
{
  font-style: italic;
}

i.card.yellow
{
  background: #ffce00;
}

i.card.red
{
  background: #ff0000;
}

.match-stats .stats span:nth-child(1) img.player
{
  box-shadow: 2px 0px 5px rgba(3,70,147,0.5);
}

.match-stats .stats span:nth-child(2) img.player
{
  box-shadow: -2px 0px 5px rgba(232,158,1,0.5);
}

div.replace img.player
{
  width: 20px;
  height: 20px;
  margin-left: -13px;
  border: 3px solid #fff;
}

.fa-arrow-up
{
  color: #00ce7b;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.fa-arrow-down
{
  color: #ff2d52;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}

.body:before
{
  content: '';
  position: absolute;
  width: 1px;
  height: 67%;
  display: inline-block;
  background: rgba(0,0,0,0.07);
  left: 50%;
  margin-left: -0.5px;
  margin-top: 85px;
}

.footer
{
  width: 100%;
  height: 37px;
  border-top: 1px solid rgba(0,0,0,0.1);
  box-shadow: inset 0 4px 10px -5px rgba(0,0,0,0.1);
  background: #f3f3f3;
}

.footer span
{
  float: left;
}

.footer span.weather,
.footer span.location
{
  width: 35%;
  height: 100%;
  display: inline-block;
  line-height: 35px;
  padding-left: 35px;
  color: rgba(0,0,0,0.4);
  font-size: 10px;
  font-weight: 600;
}

.footer span i
{
  position: absolute;
  margin-left: -20px;
  font-size: 12px;
  margin-top: 12px;
}

.footer span.setting i
{
  font-size: 16px;
  margin-left: 15px;
  color: rgba(0,0,0,0.4);
  margin-top: 10px;
}









.yt {
  position: fixed;
  padding: 7px 10px 3px 10px;
  top: 5px;
  right: 5px;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 7px;
}

.yt:hover {
  background: rgba(0, 0, 0, 0.4);
}

</style>

<div class="container">
      <div class="app">
        <div class="header">
          <span class="team team-left">
            <img src="https://s5.postimg.cc/zey8uylpf/chelsea.png" class="logo" alt="">
            <span class="name">Chelsea</span>
            <span class="stats">L | W | L | W | W</span>
          </span>
          <span class="score">
            2-2
          </span>
          <span class="team team-right">
            <img src="https://s5.postimg.cc/dr9akilb7/barca.png" class="logo" alt="">
            <span class="name">Barcelona</span>
            <span class="stats">L | W | W | L | W</span>
          </span>
        </div>
        <div class="body">
          <div class="time">
            <span class="text">
              73<span class="sec">'</span>
            </span>
            <span class="time-bar">
              <span class="progress"></span>
            </span>
          </div>
          <div class="match-stats">
            <div class="stats">
              <span></span>
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/6dyhzaqn7/ivan.jpg" class="player" alt="">
                  Ivan Rakitic <i class="fa fa-futbol-o"></i>
                </span>
                <span class="stat-time">
                  24<span class="sec">'</span>
                </span>
              </span>
            </div>
            <div class="stats">
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/sksjj0ig3/john.jpg" class="player" alt="">
                  <i class="card yellow"></i>
                  John Terry
                </span>
                <span class="stat-time">
                  28<span class="sec">'</span>
                </span>
              </span>
              <span></span>
            </div>
            <div class="stats">
              <span></span>
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/digb8bxwj/messi.jpg" class="player" alt="">
                  Lionel Messi <i class="fa fa-futbol-o"></i>
                </span>
                <span class="stat-time">
                  39<span class="sec">'</span>
                </span>
              </span>
            </div>
            <div class="stats">
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/rh8f71xsz/eden.jpg" class="player" alt="">
                  <i class="fa fa-futbol-o"></i>
                  Eden Hazard
                </span>
                <span class="stat-time">
                  45 + 2<span class="sec">'</span>
                </span>
              </span>
              <span></span>
            </div>
            <div class="stats">
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/41qi1pe1v/cesc.jpg" class="player" alt="">
                  <i class="fa fa-futbol-o"></i>
                  Cesc Fabregas
                </span>
                <span class="stat-time">
                  64<span class="sec">'</span>
                </span>
              </span>
              <span></span>
            </div>
            <div class="stats replace">
              <span></span>
              <span>
                <span class="name">
                  <img src="https://s5.postimg.cc/77b3rwwo3/sergio.jpg" class="player" alt="">
                  Sergio Busquets <i class="fa fa-arrow-down"></i>
                </span>
                <span class="name">
                  <img src="https://s5.postimg.cc/5qzl9rtr7/neymar.jpg" class="player" alt="">
                  Neymar Jr <i class="fa fa-arrow-up"></i>
                </span>
                <span class="stat-time">
                  71<span class="sec">'</span>
                </span>
              </span>
            </div>
          </div>
        </div>
        <div class="footer">
          <span class="weather">
            <i class="fa fa-sun-o"></i>
            20&deg; | 21:45 | 02.06.2017
          </span>
          <span class="location">
            <i class="fa fa-university"></i>
            Stamford Bridge &nbsp;&nbsp;43,530
          </span>
          <span class="setting">
            <i class="fa fa-cog"></i>
          </span>
        </div>
      </div>
    </div>



<div class="yt">
  <a href="https://www.youtube.com/watch?v=HIf7b8Rb6zc" target="_blank">
    <img width="151" src="https://s5.postimg.cc/vzwuxmw87/template.png" alt="" />
  </a>
</div>
</html>