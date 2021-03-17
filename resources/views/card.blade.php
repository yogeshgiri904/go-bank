<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Debit Card - GO</title>
  <style>
    *,
*:before,
*:after {
  box-sizing: border-box;
  padding:0;
  margin:0;
}
body {
  width: 100vw;
  height: 100vh;
  font-family: 'Montserrat', 'Helvetica', sans-serif;
  font-size: 14px;
  line-height: 1.3;
  background-color: #fff;
}

.left {
  position: absolute;
  left: 0;
  width: 60vw;
  height: 100vh;
  background-image: linear-gradient(to right, #202020, #808080);
}
.right {
  position: absolute;
  right: 0;
  width: 60vw;
  height: 100vh;
  overflow: hidden;
}
.right .strip-top {
  width: calc(50vw + 90px);
  transform: skewX(20deg) translateX(160px);
}
.right .strip-bottom {
  width: calc(50vw + 40px);
  transform: skewX(-15deg) translateX(90px);
}
.center {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.card {
  width: 400px;
  height: 250px;
}
.flip {
  width: inherit;
  height: inherit;
  transition: 0.7s;
  transform-style: preserve-3d;
  -webkit-animation: flip 2.5s ease;
          animation: flip 2.5s ease;
}
.front,
.back {
  position: absolute;
  width: inherit;
  height: inherit;
  border-radius: 15px;
  color: #fff;
  text-shadow: 0 1px 1px rgba(0,0,0,0.3);
  box-shadow: 0 1px 10px 1px rgba(0,0,0,0.3);
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  background-image: linear-gradient(to right, #111, #555);
  overflow: hidden;
}
.front {
  transform: translateZ(0);
}
.strip-bottom,
.strip-top {
  position: absolute;
  right: 0;
  height: inherit;
  background-image: linear-gradient(to bottom, #ff6767, #ff4545);
  box-shadow: 0 0 10px 0px rgba(0,0,0,0.5);
}
.strip-bottom {
  width: 200px;
  transform: skewX(-15deg) translateX(50px);
}
.strip-top {
  width: 180px;
  transform: skewX(20deg) translateX(50px);
}
.logo {
  position: absolute;
  top: 30px;
  right: 25px;
  width: 60px;
  clip-path:circle(45%);
  }
.investor {
  position: relative;
  top: 30px;
  left: 25px;
  text-transform: uppercase;
  font-family: 'curve', monospace;
  font-weight: bold;
}
.chip {
  position: relative;
  top: 60px;
  left: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 40px;
  border-radius: 5px;
  background-image: linear-gradient(to bottom left, #ffecc7, #d0b978);
  overflow: hidden;
}
.chip .chip-line {
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #333;
}
.chip .chip-line:nth-child(1) {
  top: 13px;
}
.chip .chip-line:nth-child(2) {
  top: 20px;
}
.chip .chip-line:nth-child(3) {
  top: 28px;
}
.chip .chip-line:nth-child(4) {
  left: 25px;
  width: 1px;
  height: 50px;
}
.chip .chip-main {
  width: 20px;
  height: 25px;
  border: 1px solid #333;
  border-radius: 3px;
  background-image: linear-gradient(to bottom left, #efdbab, #e1cb94);
  z-index: 1;
}
.wave {
  position: relative;
  top: 20px;
  left: 100px;
}
.card-number {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 40px 25px 10px;
  font-size: 23px;
  font-family: 'cc font', monospace;
  font-weight: bold;

}
.end {
  margin-left: 25px;
  text-transform: uppercase;
  font-family: 'cc font', monospace;
  font-weight: bold;
  font-size: 15px;
}
.end .end-text {
  font-size: 12px;
}
.card-holder {
  margin: 10px 25px;
  text-transform: uppercase;
  font-family: 'curve', monospace;
  font-weight: bold;
}
.mastercard_icon {
  height: 85px;
  width: 95px;
  float: right;
  position: absolute;
  right: 0;
  bottom: -10px;
  filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.3));
  filter: drop-shadow(-6.4px 6.2px 8px rgba(0, 0, 0, 0.6));
  background-repeat: no-repeat;
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg width='75' height='75' viewBox='0 0 200 155' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:cc='http://creativecommons.org/ns%23' xmlns:dc='http://purl.org/dc/elements/1.1/' xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns%23'%3E%3Cmetadata%3E%3Crdf:RDF%3E%3Ccc:Work rdf:about=''%3E%3Cdc:format%3Eimage/svg+xml%3C/dc:format%3E%3Cdc:type rdf:resource='http://purl.org/dc/dcmitype/StillImage'/%3E%3Cdc:title/%3E%3C/cc:Work%3E%3C/rdf:RDF%3E%3C/metadata%3E%3Cg transform='translate(1565.7 -1106.8)'%3E%3Cg transform='matrix(3.1437 0 0 3.1437 -4835.7 -1027.6)'%3E%3Cg transform='matrix(1.25 0 0 -1.25 1102.5 727.74)'%3E%3Cpath d='m0 0v-0.103h0.095c0.021 0 0.039 5e-3 0.052 0.013 0.012 8e-3 0.019 0.022 0.019 0.039s-7e-3 0.03-0.019 0.038c-0.013 9e-3 -0.031 0.013-0.052 0.013zm0.096 0.072c0.049 0 0.087-0.011 0.114-0.033s0.04-0.052 0.04-0.09c0-0.032-0.01-0.058-0.032-0.079-0.021-0.02-0.051-0.033-0.091-0.038l0.126-0.145h-0.098l-0.117 0.144h-0.038v-0.144h-0.082v0.385zm-0.025-0.518c0.045 0 0.087 9e-3 0.125 0.026 0.039 0.017 0.073 0.04 0.102 0.069s0.052 0.063 0.069 0.103c0.016 0.039 0.025 0.081 0.025 0.126s-9e-3 0.087-0.025 0.126c-0.017 0.039-0.04 0.074-0.069 0.103s-0.063 0.052-0.102 0.069c-0.038 0.016-0.08 0.024-0.125 0.024s-0.088-8e-3 -0.127-0.024c-0.04-0.017-0.075-0.04-0.104-0.069s-0.052-0.064-0.068-0.103c-0.017-0.039-0.025-0.081-0.025-0.126s8e-3 -0.087 0.025-0.126c0.016-0.04 0.039-0.074 0.068-0.103s0.064-0.052 0.104-0.069c0.039-0.017 0.082-0.026 0.127-0.026m0 0.739c0.059 0 0.113-0.011 0.165-0.033 0.051-0.021 0.095-0.051 0.134-0.089 0.038-0.037 0.068-0.081 0.09-0.132 0.022-0.05 0.033-0.104 0.033-0.161s-0.011-0.111-0.033-0.161-0.052-0.094-0.09-0.132c-0.039-0.037-0.083-0.067-0.134-0.089-0.052-0.022-0.106-0.033-0.165-0.033-0.06 0-0.115 0.011-0.167 0.033s-0.097 0.052-0.135 0.089c-0.038 0.038-0.068 0.082-0.09 0.132s-0.033 0.104-0.033 0.161 0.011 0.111 0.033 0.161c0.022 0.051 0.052 0.095 0.09 0.132 0.038 0.038 0.083 0.068 0.135 0.089 0.052 0.022 0.107 0.033 0.167 0.033m-38.961 1.483c0 0.734 0.481 1.337 1.267 1.337 0.751 0 1.258-0.577 1.258-1.337s-0.507-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.381 0v2.088h-0.908v-0.507c-0.288 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.031 0.236 1.319 0.612v-0.507h0.908zm30.684 0c0 0.734 0.481 1.337 1.267 1.337 0.752 0 1.258-0.577 1.258-1.337s-0.506-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.382 0v3.765h-0.909v-2.184c-0.288 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.031 0.236 1.319 0.612v-0.507h0.909zm-22.795 1.38c0.585 0 0.961-0.367 1.057-1.013h-2.167c0.097 0.603 0.463 1.013 1.11 1.013m0.018 0.813c-1.224 0-2.08-0.891-2.08-2.193 0-1.328 0.891-2.193 2.141-2.193 0.629 0 1.205 0.157 1.712 0.585l-0.445 0.673c-0.35-0.279-0.796-0.437-1.215-0.437-0.585 0-1.118 0.271-1.249 1.023h3.101c9e-3 0.113 0.018 0.227 0.018 0.349-9e-3 1.302-0.813 2.193-1.983 2.193m10.964-2.193c0 0.734 0.481 1.337 1.267 1.337 0.751 0 1.258-0.577 1.258-1.337s-0.507-1.337-1.258-1.337c-0.786 0-1.267 0.603-1.267 1.337m3.381 0v2.088h-0.908v-0.507c-0.289 0.376-0.725 0.612-1.319 0.612-1.171 0-2.089-0.918-2.089-2.193 0-1.276 0.918-2.193 2.089-2.193 0.594 0 1.03 0.236 1.319 0.612v-0.507h0.908zm-8.509 0c0-1.267 0.882-2.193 2.228-2.193 0.629 0 1.048 0.14 1.502 0.498l-0.436 0.734c-0.341-0.245-0.699-0.376-1.093-0.376-0.725 9e-3 -1.258 0.533-1.258 1.337s0.533 1.328 1.258 1.337c0.394 0 0.752-0.131 1.093-0.376l0.436 0.734c-0.454 0.358-0.873 0.498-1.502 0.498-1.346 0-2.228-0.926-2.228-2.193m11.707 2.193c-0.524 0-0.865-0.245-1.101-0.612v0.507h-0.9v-4.176h0.909v2.341c0 0.691 0.297 1.075 0.891 1.075 0.184 0 0.376-0.026 0.568-0.105l0.28 0.856c-0.201 0.079-0.463 0.114-0.647 0.114m-24.341-0.437c-0.437 0.288-1.039 0.437-1.703 0.437-1.058 0-1.739-0.507-1.739-1.337 0-0.681 0.507-1.101 1.441-1.232l0.429-0.061c0.498-0.07 0.733-0.201 0.733-0.437 0-0.323-0.332-0.507-0.952-0.507-0.629 0-1.083 0.201-1.389 0.437l-0.428-0.707c0.498-0.367 1.127-0.542 1.808-0.542 1.206 0 1.905 0.568 1.905 1.363 0 0.734-0.55 1.118-1.459 1.249l-0.428 0.062c-0.393 0.052-0.708 0.13-0.708 0.41 0 0.306 0.297 0.489 0.795 0.489 0.533 0 1.049-0.201 1.302-0.358zm11.716 0.437c-0.524 0-0.865-0.245-1.1-0.612v0.507h-0.9v-4.176h0.908v2.341c0 0.691 0.297 1.075 0.891 1.075 0.184 0 0.376-0.026 0.568-0.105l0.28 0.856c-0.201 0.079-0.463 0.114-0.647 0.114m-7.749-0.105h-1.485v1.267h-0.918v-1.267h-0.847v-0.83h0.847v-1.905c0-0.969 0.376-1.546 1.45-1.546 0.394 0 0.848 0.122 1.136 0.323l-0.262 0.778c-0.271-0.157-0.568-0.236-0.804-0.236-0.454 0-0.602 0.28-0.602 0.699v1.887h1.485zm-13.577-4.176v2.621c0 0.987-0.629 1.651-1.643 1.66-0.533 9e-3 -1.083-0.157-1.468-0.743-0.288 0.463-0.742 0.743-1.38 0.743-0.446 0-0.882-0.131-1.223-0.62v0.515h-0.909v-4.176h0.917v2.315c0 0.725 0.402 1.11 1.023 1.11 0.603 0 0.908-0.393 0.908-1.101v-2.324h0.918v2.315c0 0.725 0.419 1.11 1.022 1.11 0.62 0 0.917-0.393 0.917-1.101v-2.324z' fill='%23FFFFFF'/%3E%3C/g%3E%3Cg transform='matrix(1.25 0 0 -1.25 1103.2 710.77)'%3E%3Cpath d='m0 0v0.61h-0.159l-0.184-0.419-0.183 0.419h-0.16v-0.61h0.113v0.46l0.172-0.397h0.117l0.172 0.398v-0.461zm-1.009 0v0.506h0.204v0.103h-0.52v-0.103h0.204v-0.506z' fill='%23f79410'/%3E%3C/g%3E%3Cpath d='m1080.6 714.05h-17.202v-30.915h17.202z' fill='%23ff5f00'/%3E%3Cg transform='matrix(1.25 0 0 -1.25 1064.5 698.59)'%3E%3Cpath d='m0 0c0 5.017 2.349 9.486 6.007 12.366-2.675 2.106-6.051 3.363-9.72 3.363-8.686 0-15.727-7.042-15.727-15.729s7.041-15.729 15.727-15.729c3.669 0 7.045 1.257 9.72 3.363-3.658 2.88-6.007 7.349-6.007 12.366' fill='%23eb001b'/%3E%3C/g%3E%3Cg transform='matrix(1.25 0 0 -1.25 1103.8 698.59)'%3E%3Cpath d='m0 0c0-8.687-7.041-15.729-15.727-15.729-3.669 0-7.045 1.257-9.721 3.363 3.659 2.88 6.008 7.349 6.008 12.366s-2.349 9.486-6.008 12.366c2.676 2.106 6.052 3.363 9.721 3.363 8.686 0 15.727-7.042 15.727-15.729' fill='%23f79e1b'/%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  background-size: 60px;
}
.card {
  perspective: 1000;
}
.card:hover .flip {
  transform: rotateY(180deg);
}
.back {
  transform: rotateY(180deg) translateZ(0);
  background: #9e9e9e;
}
.back .strip-black {
  position: absolute;
  top: 30px;
  left: 0;
  width: 100%;
  height: 50px;
  background: #000;
}
.back .cvv {
  position: absolute;
  top: 110px;
  left: 0;
  right: 0;
  height: 36px;
  width: 90%;
  padding: 10px;
  margin: 0 auto;
  border-radius: 5px;
  text-align: right;
  letter-spacing: 1px;
  color: #000;
  background: #fff;
}
.back .cvv label {
  display: block;
  margin: -30px 0 15px;
  font-size: 10px;
  text-transform: uppercase;
  color: #fff;
}
.back .terms {
  position: absolute;
  top: 150px;
  padding: 20px;
  font-size: 10px;
  text-align: justify;
}
@font-face{
	font-family: 'curve';
	src:url("https://pattern.kivan-works.com/fonts/Beyond_Infinity.ttf");
}
@font-face {
  font-family: 'cc font';
	src:url("https://pattern.kivan-works.com/fonts/kredit_front.ttf");
}
  </style>
</head>
<body>
<div class="backgound">
  <div class="left"></div>
  <div class="right">
    <div class="strip-bottom"></div>
    <div class="strip-top"></div>
  </div>
</div>
<div class="center">
  <div class="card">
    <div class="flip">
      <div class="front">
        <div class="strip-bottom"></div>
        <div class="strip-top"></div>
        <img src="goLogo.jpg" class="logo" alt="GO">
        <div class="investor">GOSWAMI BANK &nbsp;&nbsp;<small>Debit Card</small></div>
        <div class="chip">
          <div class="chip-line"></div>
          <div class="chip-line"></div>
          <div class="chip-line"></div>
          <div class="chip-line"></div>
          <div class="chip-main"></div>
        </div>
        <svg class="wave" viewBox="0 3.71 26.959 38.787" width="26.959" height="38.787" fill="white">
          <path d="M19.709 3.719c.266.043.5.187.656.406 4.125 5.207 6.594 11.781 6.594 18.938 0 7.156-2.469 13.73-6.594 18.937-.195.336-.57.531-.957.492a.9946.9946 0 0 1-.851-.66c-.129-.367-.035-.777.246-1.051 3.855-4.867 6.156-11.023 6.156-17.718 0-6.696-2.301-12.852-6.156-17.719-.262-.317-.301-.762-.102-1.121.204-.36.602-.559 1.008-.504z"></path>
          <path d="M13.74 7.563c.231.039.442.164.594.343 3.508 4.059 5.625 9.371 5.625 15.157 0 5.785-2.113 11.097-5.625 15.156-.363.422-1 .472-1.422.109-.422-.363-.472-1-.109-1.422 3.211-3.711 5.156-8.551 5.156-13.843 0-5.293-1.949-10.133-5.156-13.844-.27-.309-.324-.75-.141-1.114.188-.367.578-.582.985-.542h.093z"></path>
          <path d="M7.584 11.438c.227.031.438.144.594.312 2.953 2.863 4.781 6.875 4.781 11.313 0 4.433-1.828 8.449-4.781 11.312-.398.387-1.035.383-1.422-.016-.387-.398-.383-1.035.016-1.421 2.582-2.504 4.187-5.993 4.187-9.875 0-3.883-1.605-7.372-4.187-9.875-.321-.282-.426-.739-.266-1.133.164-.395.559-.641.984-.617h.094zM1.178 15.531c.121.02.238.063.344.125 2.633 1.414 4.437 4.215 4.437 7.407 0 3.195-1.797 5.996-4.437 7.406-.492.258-1.102.07-1.36-.422-.257-.492-.07-1.102.422-1.359 2.012-1.075 3.375-3.176 3.375-5.625 0-2.446-1.371-4.551-3.375-5.625-.441-.204-.676-.692-.551-1.165.122-.468.567-.785 1.051-.742h.094z"></path>
        </svg>
        <div class="card-number"> 
          <div class="section">5453</div>
          <div class="section">2000</div>
          <div class="section">0000</div>
          <div class="section">0000</div>
        </div>
        <div class="end"><span class="end-text">Valid Thur -</span><span class="end-date"> 11/22</span></div>
        <div class="card-holder">Yogesh Giri</div>
        <div class="mastercard_icon svg"></div>
      </div>
      <div class="back">
        <div class="strip-black"></div>
        <div class="cvv">
          <label>cvv</label>
          <div>123</div>
        </div>
        <div class="terms">
          <p>This card is property of Goswami Bank, Wonderland. Misuse is criminal offence. If found, please return to Goswami Bank or to the nearest bank with MasterCard logo. Use of this card is subject to the credit card agreement.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>