<?php
require "config/constants.php";
session_start();
if (!isset($_SESSION["uid"])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/e32f8d610d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="main.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap');
		@import url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');


		@media screen and (max-width:480px) {
			#search {
				width: 80%;
			}

			#search_btn {
				width: 30%;
				float: right;
				margin-top: -32px;
				margin-right: 10px;
			}
		}

		body {
			margin: 0;
			padding: 0;
			overflow-x: hidden;
		}

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			font-family: 'Oswald', sans-serif;
		}

		/*Header*/

		header {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			z-index: 10;
			background-color: #000000;
			padding: 15px 15px;
		}

		header .container {
			-webkit-display: flex;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}


		header .logo a {
			font-size: 30px;
			text-decoration: none;
			color: #ffffff;
			font-weight: 700;
		}

		header .logo a span {
			color: #c11325;
		}

		.othercolor {
			color: #c11325;
		}

		header .nav {
			position: fixed;
			background-color: #c11325;
			width: 280px;
			top: 0;
			right: 0;
			height: 100%;
			z-index: 99;
			padding: 100px 0px 15px;
			-webkit-transform: translateX(100%);
			transform: translateX(100%);
			-webkit-transition: transform .5s ease;
			transition: transform .5s ease;
		}

		header .nav.open {
			-webkit-transform: translateX(0);
			transform: translateX(0);
		}

		header .nav ul {
			list-style: none;
			margin: 0;
			padding: 0px;
		}

		header .nav ul li {
			display: block;
		}

		header .nav ul li a {
			text-decoration: none;
			font-size: 30px;
			font-weight: 400;
			color: #ffffff;
			display: block;
			position: relative;
			padding: 10px 30px;
		}

		header .nav ul li a.active::before {
			content: '';
			position: absolute;
			left: 0px;
			top: 0px;
			height: 100%;
			width: 100%;
			background-color: #000000;
			opacity: .2;
			-webkit-transition: width .5s ease;
			transition: width .5s ease;
			z-index: -1;
		}

		header .nav ul li a::before {
			content: '';
			position: absolute;
			left: 0px;
			top: 0px;
			height: 100%;
			width: 0px;
			background-color: #000000;
			opacity: .2;
			-webkit-transition: width .5s ease;
			transition: width .5s ease;
			z-index: -1;
		}

		header .nav ul li a:hover::before {
			width: 100%;
		}

		header .ham-burger {
			display: inline-block;
			position: relative;
			z-index: 100;
		}

		header .ham-burger span {
			height: 3px;
			margin-bottom: 8px;
			display: block;
			background-color: #ffffff;
			width: 30px;
			-webkit-transition: transform .5s ease;
			transition: transform .5s ease;
		}

		header .ham-burger span:nth-child(1) {
			transform-origin: left top;
		}

		header .ham-burger span:nth-child(2) {
			transform-origin: left bottom;
		}

		header .ham-burger.active span:nth-child(1) {
			-webkit-transform: rotate(45deg) translateY(-6px);
			transform: rotate(45deg) translateY(-6px);
		}

		header .ham-burger.active span:nth-child(2) {
			-webkit-transform: rotate(-45deg) translateY(6px);
			transform: rotate(-45deg) translateY(6px)
		}

		.container {
			max-width: 1170px;
			margin: auto;

		}

		/*Home section*/
		.home {
			height: 100vh;
			background-image: url('images/headerpic.jpg');
			background-size: cover;
			padding: 15px;
			-webkit-display: flex;
			display: flex;
			position: relative;
		}

		.home .go-down {
			position: absolute;
			bottom: 50px;
			width: 26px;
			height: 40px;
			border: 1px solid #ffffff;
			display: block;
			border-radius: 4px;
			text-align: center;
			left: 50%;
			margin-left: -13px;
		}

		.home .go-down .fa {
			color: #ffffff;
			-webkit-animation: goDown 1s ease infinite;
			animation: goDown 1s ease infinite;
		}

		@-webkit-keyframes goDown {
			0% {
				transform: translateY(0);
				opacity: .5
			}

			100% {
				transform: translateY(10px);
			}
		}

		@keyframes goDown {
			0% {
				transform: translateY(0);
				opacity: .5
			}

			100% {
				transform: translateY(10px);
			}
		}

		.home .container {
			-webkit-display: flex;
			display: flex;
			flex-direction: column;
			flex-grow: 1;
		}

		.home h1 {
			color: #ffffff;
			font-size: 60px;
			font-weight: 700;
			text-transform: uppercase;
			margin: 0;
		}

		.home h1 span {
			color: #c11325;
			;
		}


		/*About section*/

		.about {
			padding: 80px 0px;
			background-color: #ffffff;
		}

		.about .content {
			-webkit-display: flex;
			display: flex;
			height: calc(100vh/1.3);
		}

		.about .content .box {
			flex: 0 0 33.33%;
			max-width: 33.33%;
			padding: 15px;
		}

		.about .content .box .inner {
			background-color: #222222;
		}

		.about .content .box:nth-child(2) .inner {
			background-color: #c11325;
		}

		.about .content .box .inner .img img {
			width: 100%;
		}

		.about .content .box .inner .text {
			padding: 30px;
		}

		.about .content .box .inner .text h4 {
			font-size: 20px;
			margin: 0;
			padding: 0px 0px 15px;
			font-weight: 500;
			color: #ffffff;
			text-transform: capitalize;
			text-align: center;
		}

		.about .content .box .inner .text p {
			font-size: 15px;
			line-height: 20px;
			color: #ffffff;
			text-align: center;
			margin: 0;
			font-family: 'Open Sans', sans-serif;
			height: calc(100vh/4);
		}


		/*Service Section*/
		.service {
			padding: 80px 0px;
			background-color: #c11325;
		}

		.service .content {
			-webkit-display: flex;
			display: flex;
		}

		.service .content .box {
			flex: 0 0 50%;
			max-width: 50%;
			padding: 15px;
		}

		.service .content .text h2 {
			font-size: 30px;
			font-weight: 500;
			color: #ffffff;
			padding: 0px 0px 20px;
		}

		.service .content .text p {
			font-size: 15px;
			line-height: 20px;
			color: #ffffff;
			margin: 0;
			padding: 0px 0px 20px;
			font-family: 'Open Sans', sans-serif;
		}

		.service .content .text .btn {
			padding: 8px 30px;
			background-color: #222222;
			color: #ffffff;
			text-decoration: none;
			display: inline-block;
			border: 1px solid transparent;
			cursor: pointer;
			-webkit-transition: all .5s ease;
			transition: all .5s ease;
		}

		.service .content .text .btn:hover {
			border: 1px solid #ffffff;
			color: #ffffff;
			background-color: transparent;
		}

		.service .content .accordian-container {
			margin-bottom: 5px;
		}

		.service .content .accordian-container .head {
			background-color: rgba(0, 0, 0, 0.2);
			position: relative;
			padding: 12px 15px;
			cursor: pointer;
		}

		.service .content .accordian-container .head .fa {
			position: absolute;
			right: 10px;
			top: 13px;
			color: #ffffff;
			height: 30px;
			width: 30px;
			text-align: center;
			line-height: 30px;
			color: #ffffff;
			border-radius: 50%;
		}

		.service .content .accordian-container .head h4 {
			font-size: 20px;
			margin: 0;
			padding: 0;
			font-weight: 500;
			color: #ffffff;
			text-transform: capitalize;
		}

		.service .content .accordian-container.active .head {
			background-color: #222222;
		}

		.service .content .accordian-container .body {
			display: none;
			padding: 15px;
			background-color: #222222;
			border-top: 1px solid #333333;
		}

		.service .content .accordian-container:nth-child(1) .body {
			display: block;
		}

		.service .content .accordian-container .body p {
			font-size: 15px;
			line-height: 20px;
			color: #ffffff;
			margin: 0;
			padding: 0;
			font-family: 'Open Sans', sans-serif;
		}


		/*Classes Section*/

		.classes {
			padding: 80px 0px 50px;
			background-color: #ffffff;
		}

		.classes .content {
			-webkit-display: flex;
			display: flex;
		}

		.classes .content .box {
			padding: 15px;
			flex: 0 0 50%;
			max-width: 50%;
		}

		.classes .content .img img {
			width: 100%;

		}

		.classes .content .text h2 {
			font-size: 30px;
			font-weight: 500;
			color: #000000;
			padding: 0px 0px 20px;
			text-transform: capitalize;
		}

		.classes .content .text p {
			font-size: 15px;
			line-height: 20px;
			color: #000000;
			margin: 0;
			padding: 0px 0px 30px;
			font-family: 'Open Sans', sans-serif;
		}


		.classes .content .class-items .item {
			margin-bottom: 30px;
			display: flex;
		}

		.classes .content .class-items .item:nth-child(1) {
			background-color: #c11325;
		}

		.classes .content .class-items .item:nth-child(2) {
			background-color: #222222;
		}

		.classes .content .class-items .item .item-text {
			padding: 15px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.classes .content .class-items .item .item-text,
		.classes .content .class-items .item .item-img {
			flex: 0 0 50%;
			max-width: 50%;
			position: relative;
		}

		.classes .content .class-items .item .item-img img {
			width: 100%;
			display: block;
		}

		.classes .content .class-items .item .item-img .price {
			position: absolute;
			height: 50px;
			width: 60px;
			font-size: 20px;
			font-weight: 500;
			color: #ffffff;
			text-align: center;
			line-height: 50px;
		}

		/* .classes .content .class-items .item:nth-child(1) .item-img .price{
 background-color: #c11325;
 left:0;
 top:0;
} */
		/* .classes .content .class-items .item:nth-child(2) .item-img .price{
 background-color: #222222;
 right:0;
 top:0;
} */
		.classes .content .class-items .item .item-text h4 {
			font-size: 20px;
			margin: 0;
			padding: 0px 0px 15px;
			font-weight: 500;
			color: #ffffff;
			text-transform: capitalize;
			text-align: left;
		}

		.classes .content .class-items .item .item-text p {
			font-size: 15px;
			line-height: 20px;
			color: #ffffff;
			text-align: left;
			margin: 0;
			padding: 0 0 20px;
			font-family: 'Open Sans', sans-serif;
		}

		.classes .content .class-items .item .item-text a {
			font-size: 16px;
			text-decoration: none;
			display: inline-block;
		}

		.classes .content .class-items .item .item-text a {
			color: #ffffff;
		}

		/*Contact Section*/

		.contact {
			padding: 80px 0px;
			background-color: #222222;
		}

		.contact .content {
			-webkit-display: flex;
			display: flex;
		}

		.contact .content .box {
			flex: 0 0 50%;
			max-width: 50%;
			padding: 15px;
		}

		.contact .content .form input,
		.contact .content .form textarea {
			height: 45px;
			width: 100%;
			padding: 6px 12px;
			margin-bottom: 25px;
			background-color: transparent;
			border: 1px solid #ffffff;
			font-family: 'Open-sans', sans-serif;
			color: #ffffff;
		}

		.contact .content .form input:focus,
		.contact .content .form textarea:focus {
			outline: none;
		}

		.contact .content .form input::placeholder,
		.contact .content .form textarea::placeholder {
			color: #ffffff;
		}

		.contact .content .form textarea {
			height: 100px;
		}

		.contact .content .form button {
			border: none;
			outline: none;
			box-shadow: none;
			height: 45px;
			padding: 0px 50px;
			border: 1px solid transparent;
			background-color: #c11325;
			color: #ffffff;
			font-size: 15px;
			transition: all .5s ease;
			cursor: pointer;
		}

		.contact .content .form button:hover {
			background-color: transparent;
			color: #ffffff;
			border-color: #ffffff;
		}

		.contact .content .text h2 {
			font-size: 30px;
			font-weight: 500;
			color: #c11325;
			padding: 0px 0px 20px;
		}

		.contact .content .text p {
			font-size: 15px;
			line-height: 20px;
			color: #ffffff;
			margin: 0;
			padding: 0px 0px 30px;
			font-family: 'Open-sans', sans-serif;
		}

		.contact .content .text .info ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.contact .content .text .info li {
			display: block;
			margin-bottom: 15px;
			color: #ffffff;
			font-size: 15px;
			letter-spacing: 1px;
			position: relative;
			padding-left: 40px;
			font-family: 'Open-Sans', sans-serif;
		}

		.contact .content .text .info li span {
			display: inline-block;
			position: absolute;
			left: 0px;
			top: 0px;
			font-size: 20px;
			color: #c11325;
		}

		.contact .content .text .social {
			padding-top: 30px;
		}

		.contact .content .text .social a {
			height: 40px;
			width: 40px;
			line-height: 40px;
			text-align: center;
			background-color: #c11325;
			text-decoration: none;
			display: inline-block;
			margin-right: 10px;
			transition: all .5s ease;
			border: 1px solid transparent;
		}

		.contact .content .text .social a:hover {
			background-color: transparent;
			border-color: #ffffff;
		}

		.contact .content .text .social a span {
			color: #ffffff;
			font-size: 20px;
		}

		.contact .content .text .copy {
			border-top: 1px solid #333333;
			margin-top: 30px;
			padding-top: 20px;
			color: #c5c5c5;
			font-size: 15px;
		}




		/*Responsive*/

		/*if screen width is less than or equal to 991px then*/
		@media(max-width: 991px) {
			.home {
				background-position: center;
			}

			.classes .content {
				flex-wrap: wrap;
			}

			.classes .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.classes .content .img {
				display: none;
			}

			.supplement-store .products {
				padding: 15px;
			}
		}

		/*if screen width is less than or equal to 767px then*/
		@media(max-width: 767px) {
			.home h1 {
				font-size: 40px;
			}

			.about .content {
				flex-wrap: wrap;
			}

			.about .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.service .content {
				flex-wrap: wrap;
			}

			.service .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.classes .content .class-items .item {
				flex-wrap: wrap;
			}

			.classes .content .class-items .item .item-text,
			.classes .content .class-items .item .item-img {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.schedule .content {
				flex-wrap: wrap;
			}

			.schedule .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.gallery .content {
				flex-wrap: wrap;
			}

			.gallery .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.price-package .content {
				flex-wrap: wrap;
			}

			.price-package .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}

			.contact .content {
				flex-wrap: wrap;
			}

			.contact .content .box {
				flex: 0 0 100%;
				max-width: 100%;
			}
		}

		/*if screen width is less than or equal to 550px then*/
		@media(max-width: 550px) {
			.home h1 {
				font-size: 30px;
			}
		}

		.underline {
			border-bottom: 3px solid #ec4141;
		}

		.button {
			padding: 0.6rem 1.5rem;
			cursor: pointer;
			outline: none;
		}

		.first-button {
			text-transform: uppercase;
			font-family: 'Oswald', sans-serif;
			letter-spacing: 2px;
			margin-top: 1rem;
			color: white;
			background-color: #ec4141;
			border: 1px solid #ec4141;
			border-radius: 50px;
			font-size: 18px;
			transition: all 0.5s linear;
		}

		.first-button:hover {
			background-color: transparent;
		}

		.first-p {
			color: white;
			font-size: 30px;
			font-family: 'Oswald', sans-serif;
			text-transform: capitalize;
		}

		/* supplements store start */
		@media(max-width:1000px) {
			.items {
				width: 80%;
			}
		}

		@media(max-width:750px) {
			.items {
				width: 80%;
			}
		}



		/*!
Animate.css - http://daneden.me/animate
Licensed under the MIT license

Copyright (c) 2013 Daniel Eden

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

		.animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.hinge {
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
		}

		@-webkit-keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			40% {
				-webkit-transform: translateY(-30px);
				transform: translateY(-30px);
			}

			60% {
				-webkit-transform: translateY(-15px);
				transform: translateY(-15px);
			}
		}

		@keyframes bounce {

			0%,
			20%,
			50%,
			80%,
			100% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			40% {
				-webkit-transform: translateY(-30px);
				-ms-transform: translateY(-30px);
				transform: translateY(-30px);
			}

			60% {
				-webkit-transform: translateY(-15px);
				-ms-transform: translateY(-15px);
				transform: translateY(-15px);
			}
		}

		.bounce {
			-webkit-animation-name: bounce;
			animation-name: bounce;
		}

		@-webkit-keyframes flash {

			0%,
			50%,
			100% {
				opacity: 1;
			}

			25%,
			75% {
				opacity: 0;
			}
		}

		@keyframes flash {

			0%,
			50%,
			100% {
				opacity: 1;
			}

			25%,
			75% {
				opacity: 0;
			}
		}

		.flash {
			-webkit-animation-name: flash;
			animation-name: flash;
		}

		/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

		@-webkit-keyframes pulse {
			0% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			50% {
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
			}

			100% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}
		}

		@keyframes pulse {
			0% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}

			50% {
				-webkit-transform: scale(1.1);
				-ms-transform: scale(1.1);
				transform: scale(1.1);
			}

			100% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}
		}

		.pulse {
			-webkit-animation-name: pulse;
			animation-name: pulse;
		}

		@-webkit-keyframes shake {

			0%,
			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translateX(-10px);
				transform: translateX(-10px);
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translateX(10px);
				transform: translateX(10px);
			}
		}

		@keyframes shake {

			0%,
			100% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			10%,
			30%,
			50%,
			70%,
			90% {
				-webkit-transform: translateX(-10px);
				-ms-transform: translateX(-10px);
				transform: translateX(-10px);
			}

			20%,
			40%,
			60%,
			80% {
				-webkit-transform: translateX(10px);
				-ms-transform: translateX(10px);
				transform: translateX(10px);
			}
		}

		.shake {
			-webkit-animation-name: shake;
			animation-name: shake;
		}

		@-webkit-keyframes swing {
			20% {
				-webkit-transform: rotate(15deg);
				transform: rotate(15deg);
			}

			40% {
				-webkit-transform: rotate(-10deg);
				transform: rotate(-10deg);
			}

			60% {
				-webkit-transform: rotate(5deg);
				transform: rotate(5deg);
			}

			80% {
				-webkit-transform: rotate(-5deg);
				transform: rotate(-5deg);
			}

			100% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}
		}

		@keyframes swing {
			20% {
				-webkit-transform: rotate(15deg);
				-ms-transform: rotate(15deg);
				transform: rotate(15deg);
			}

			40% {
				-webkit-transform: rotate(-10deg);
				-ms-transform: rotate(-10deg);
				transform: rotate(-10deg);
			}

			60% {
				-webkit-transform: rotate(5deg);
				-ms-transform: rotate(5deg);
				transform: rotate(5deg);
			}

			80% {
				-webkit-transform: rotate(-5deg);
				-ms-transform: rotate(-5deg);
				transform: rotate(-5deg);
			}

			100% {
				-webkit-transform: rotate(0deg);
				-ms-transform: rotate(0deg);
				transform: rotate(0deg);
			}
		}

		.swing {
			-webkit-transform-origin: top center;
			-ms-transform-origin: top center;
			transform-origin: top center;
			-webkit-animation-name: swing;
			animation-name: swing;
		}

		@-webkit-keyframes tada {
			0% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			10%,
			20% {
				-webkit-transform: scale(0.9) rotate(-3deg);
				transform: scale(0.9) rotate(-3deg);
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale(1.1) rotate(3deg);
				transform: scale(1.1) rotate(3deg);
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale(1.1) rotate(-3deg);
				transform: scale(1.1) rotate(-3deg);
			}

			100% {
				-webkit-transform: scale(1) rotate(0);
				transform: scale(1) rotate(0);
			}
		}

		@keyframes tada {
			0% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}

			10%,
			20% {
				-webkit-transform: scale(0.9) rotate(-3deg);
				-ms-transform: scale(0.9) rotate(-3deg);
				transform: scale(0.9) rotate(-3deg);
			}

			30%,
			50%,
			70%,
			90% {
				-webkit-transform: scale(1.1) rotate(3deg);
				-ms-transform: scale(1.1) rotate(3deg);
				transform: scale(1.1) rotate(3deg);
			}

			40%,
			60%,
			80% {
				-webkit-transform: scale(1.1) rotate(-3deg);
				-ms-transform: scale(1.1) rotate(-3deg);
				transform: scale(1.1) rotate(-3deg);
			}

			100% {
				-webkit-transform: scale(1) rotate(0);
				-ms-transform: scale(1) rotate(0);
				transform: scale(1) rotate(0);
			}
		}

		.tada {
			-webkit-animation-name: tada;
			animation-name: tada;
		}

		/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

		@-webkit-keyframes wobble {
			0% {
				-webkit-transform: translateX(0%);
				transform: translateX(0%);
			}

			15% {
				-webkit-transform: translateX(-25%) rotate(-5deg);
				transform: translateX(-25%) rotate(-5deg);
			}

			30% {
				-webkit-transform: translateX(20%) rotate(3deg);
				transform: translateX(20%) rotate(3deg);
			}

			45% {
				-webkit-transform: translateX(-15%) rotate(-3deg);
				transform: translateX(-15%) rotate(-3deg);
			}

			60% {
				-webkit-transform: translateX(10%) rotate(2deg);
				transform: translateX(10%) rotate(2deg);
			}

			75% {
				-webkit-transform: translateX(-5%) rotate(-1deg);
				transform: translateX(-5%) rotate(-1deg);
			}

			100% {
				-webkit-transform: translateX(0%);
				transform: translateX(0%);
			}
		}

		@keyframes wobble {
			0% {
				-webkit-transform: translateX(0%);
				-ms-transform: translateX(0%);
				transform: translateX(0%);
			}

			15% {
				-webkit-transform: translateX(-25%) rotate(-5deg);
				-ms-transform: translateX(-25%) rotate(-5deg);
				transform: translateX(-25%) rotate(-5deg);
			}

			30% {
				-webkit-transform: translateX(20%) rotate(3deg);
				-ms-transform: translateX(20%) rotate(3deg);
				transform: translateX(20%) rotate(3deg);
			}

			45% {
				-webkit-transform: translateX(-15%) rotate(-3deg);
				-ms-transform: translateX(-15%) rotate(-3deg);
				transform: translateX(-15%) rotate(-3deg);
			}

			60% {
				-webkit-transform: translateX(10%) rotate(2deg);
				-ms-transform: translateX(10%) rotate(2deg);
				transform: translateX(10%) rotate(2deg);
			}

			75% {
				-webkit-transform: translateX(-5%) rotate(-1deg);
				-ms-transform: translateX(-5%) rotate(-1deg);
				transform: translateX(-5%) rotate(-1deg);
			}

			100% {
				-webkit-transform: translateX(0%);
				-ms-transform: translateX(0%);
				transform: translateX(0%);
			}
		}

		.wobble {
			-webkit-animation-name: wobble;
			animation-name: wobble;
		}

		@-webkit-keyframes bounceIn {
			0% {
				opacity: 0;
				-webkit-transform: scale(.3);
				transform: scale(.3);
			}

			50% {
				opacity: 1;
				-webkit-transform: scale(1.05);
				transform: scale(1.05);
			}

			70% {
				-webkit-transform: scale(.9);
				transform: scale(.9);
			}

			100% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}
		}

		@keyframes bounceIn {
			0% {
				opacity: 0;
				-webkit-transform: scale(.3);
				-ms-transform: scale(.3);
				transform: scale(.3);
			}

			50% {
				opacity: 1;
				-webkit-transform: scale(1.05);
				-ms-transform: scale(1.05);
				transform: scale(1.05);
			}

			70% {
				-webkit-transform: scale(.9);
				-ms-transform: scale(.9);
				transform: scale(.9);
			}

			100% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}
		}

		.bounceIn {
			-webkit-animation-name: bounceIn;
			animation-name: bounceIn;
		}

		@-webkit-keyframes bounceInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateY(30px);
				transform: translateY(30px);
			}

			80% {
				-webkit-transform: translateY(-10px);
				transform: translateY(-10px);
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes bounceInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateY(30px);
				-ms-transform: translateY(30px);
				transform: translateY(30px);
			}

			80% {
				-webkit-transform: translateY(-10px);
				-ms-transform: translateY(-10px);
				transform: translateY(-10px);
			}

			100% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.bounceInDown {
			-webkit-animation-name: bounceInDown;
			animation-name: bounceInDown;
		}

		@-webkit-keyframes bounceInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateX(30px);
				transform: translateX(30px);
			}

			80% {
				-webkit-transform: translateX(-10px);
				transform: translateX(-10px);
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes bounceInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateX(30px);
				-ms-transform: translateX(30px);
				transform: translateX(30px);
			}

			80% {
				-webkit-transform: translateX(-10px);
				-ms-transform: translateX(-10px);
				transform: translateX(-10px);
			}

			100% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.bounceInLeft {
			-webkit-animation-name: bounceInLeft;
			animation-name: bounceInLeft;
		}

		@-webkit-keyframes bounceInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateX(-30px);
				transform: translateX(-30px);
			}

			80% {
				-webkit-transform: translateX(10px);
				transform: translateX(10px);
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes bounceInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateX(-30px);
				-ms-transform: translateX(-30px);
				transform: translateX(-30px);
			}

			80% {
				-webkit-transform: translateX(10px);
				-ms-transform: translateX(10px);
				transform: translateX(10px);
			}

			100% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.bounceInRight {
			-webkit-animation-name: bounceInRight;
			animation-name: bounceInRight;
		}

		@-webkit-keyframes bounceInUp {
			0% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				transform: translateY(2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateY(-30px);
				transform: translateY(-30px);
			}

			80% {
				-webkit-transform: translateY(10px);
				transform: translateY(10px);
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes bounceInUp {
			0% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				-ms-transform: translateY(2000px);
				transform: translateY(2000px);
			}

			60% {
				opacity: 1;
				-webkit-transform: translateY(-30px);
				-ms-transform: translateY(-30px);
				transform: translateY(-30px);
			}

			80% {
				-webkit-transform: translateY(10px);
				-ms-transform: translateY(10px);
				transform: translateY(10px);
			}

			100% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.bounceInUp {
			-webkit-animation-name: bounceInUp;
			animation-name: bounceInUp;
		}

		@-webkit-keyframes bounceOut {
			0% {
				-webkit-transform: scale(1);
				transform: scale(1);
			}

			25% {
				-webkit-transform: scale(.95);
				transform: scale(.95);
			}

			50% {
				opacity: 1;
				-webkit-transform: scale(1.1);
				transform: scale(1.1);
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.3);
				transform: scale(.3);
			}
		}

		@keyframes bounceOut {
			0% {
				-webkit-transform: scale(1);
				-ms-transform: scale(1);
				transform: scale(1);
			}

			25% {
				-webkit-transform: scale(.95);
				-ms-transform: scale(.95);
				transform: scale(.95);
			}

			50% {
				opacity: 1;
				-webkit-transform: scale(1.1);
				-ms-transform: scale(1.1);
				transform: scale(1.1);
			}

			100% {
				opacity: 0;
				-webkit-transform: scale(.3);
				-ms-transform: scale(.3);
				transform: scale(.3);
			}
		}

		.bounceOut {
			-webkit-animation-name: bounceOut;
			animation-name: bounceOut;
		}

		@-webkit-keyframes bounceOutDown {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateY(-20px);
				transform: translateY(-20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				transform: translateY(2000px);
			}
		}

		@keyframes bounceOutDown {
			0% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateY(-20px);
				-ms-transform: translateY(-20px);
				transform: translateY(-20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				-ms-transform: translateY(2000px);
				transform: translateY(2000px);
			}
		}

		.bounceOutDown {
			-webkit-animation-name: bounceOutDown;
			animation-name: bounceOutDown;
		}

		@-webkit-keyframes bounceOutLeft {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateX(20px);
				transform: translateX(20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		@keyframes bounceOutLeft {
			0% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateX(20px);
				-ms-transform: translateX(20px);
				transform: translateX(20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		.bounceOutLeft {
			-webkit-animation-name: bounceOutLeft;
			animation-name: bounceOutLeft;
		}

		@-webkit-keyframes bounceOutRight {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateX(-20px);
				transform: translateX(-20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		@keyframes bounceOutRight {
			0% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateX(-20px);
				-ms-transform: translateX(-20px);
				transform: translateX(-20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		.bounceOutRight {
			-webkit-animation-name: bounceOutRight !important;
			animation-name: bounceOutRight;
		}

		@-webkit-keyframes bounceOutUp {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateY(20px);
				transform: translateY(20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		@keyframes bounceOutUp {
			0% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			20% {
				opacity: 1;
				-webkit-transform: translateY(20px);
				-ms-transform: translateY(20px);
				transform: translateY(20px);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		.bounceOutUp {
			-webkit-animation-name: bounceOutUp;
			animation-name: bounceOutUp;
		}

		@-webkit-keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		@keyframes fadeIn {
			0% {
				opacity: 0;
			}

			100% {
				opacity: 1;
			}
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-20px);
				transform: translateY(-20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-20px);
				-ms-transform: translateY(-20px);
				transform: translateY(-20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown;
		}

		@-webkit-keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes fadeInDownBig {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.fadeInDownBig {
			-webkit-animation-name: fadeInDownBig;
			animation-name: fadeInDownBig;
		}

		@-webkit-keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-20px);
				transform: translateX(-20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes fadeInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-20px);
				-ms-transform: translateX(-20px);
				transform: translateX(-20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.fadeInLeft {
			-webkit-animation-name: fadeInLeft;
			animation-name: fadeInLeft;
		}

		@-webkit-keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes fadeInLeftBig {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.fadeInLeftBig {
			-webkit-animation-name: fadeInLeftBig;
			animation-name: fadeInLeftBig;
		}

		@-webkit-keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(20px);
				transform: translateX(20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes fadeInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(20px);
				-ms-transform: translateX(20px);
				transform: translateX(20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.fadeInRight {
			-webkit-animation-name: fadeInRight;
			animation-name: fadeInRight;
		}

		@-webkit-keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes fadeInRightBig {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.fadeInRightBig {
			-webkit-animation-name: fadeInRightBig;
			animation-name: fadeInRightBig;
		}

		@-webkit-keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				transform: translateY(20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes fadeInUp {
			0% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				-ms-transform: translateY(20px);
				transform: translateY(20px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.fadeInUp {
			-webkit-animation-name: fadeInUp;
			animation-name: fadeInUp;
		}

		@-webkit-keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				transform: translateY(2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes fadeInUpBig {
			0% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				-ms-transform: translateY(2000px);
				transform: translateY(2000px);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.fadeInUpBig {
			-webkit-animation-name: fadeInUpBig;
			animation-name: fadeInUpBig;
		}

		@-webkit-keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		@keyframes fadeOut {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
			}
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@-webkit-keyframes fadeOutDown {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				transform: translateY(20px);
			}
		}

		@keyframes fadeOutDown {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(20px);
				-ms-transform: translateY(20px);
				transform: translateY(20px);
			}
		}

		.fadeOutDown {
			-webkit-animation-name: fadeOutDown;
			animation-name: fadeOutDown;
		}

		@-webkit-keyframes fadeOutDownBig {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				transform: translateY(2000px);
			}
		}

		@keyframes fadeOutDownBig {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(2000px);
				-ms-transform: translateY(2000px);
				transform: translateY(2000px);
			}
		}

		.fadeOutDownBig {
			-webkit-animation-name: fadeOutDownBig;
			animation-name: fadeOutDownBig;
		}

		@-webkit-keyframes fadeOutLeft {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-20px);
				transform: translateX(-20px);
			}
		}

		@keyframes fadeOutLeft {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-20px);
				-ms-transform: translateX(-20px);
				transform: translateX(-20px);
			}
		}

		.fadeOutLeft {
			-webkit-animation-name: fadeOutLeft;
			animation-name: fadeOutLeft;
		}

		@-webkit-keyframes fadeOutLeftBig {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		@keyframes fadeOutLeftBig {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		.fadeOutLeftBig {
			-webkit-animation-name: fadeOutLeftBig;
			animation-name: fadeOutLeftBig;
		}

		@-webkit-keyframes fadeOutRight {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(20px);
				transform: translateX(20px);
			}
		}

		@keyframes fadeOutRight {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(20px);
				-ms-transform: translateX(20px);
				transform: translateX(20px);
			}
		}

		.fadeOutRight {
			-webkit-animation-name: fadeOutRight;
			animation-name: fadeOutRight;
		}

		@-webkit-keyframes fadeOutRightBig {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		@keyframes fadeOutRightBig {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		.fadeOutRightBig {
			-webkit-animation-name: fadeOutRightBig;
			animation-name: fadeOutRightBig;
		}

		@-webkit-keyframes fadeOutUp {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-20px);
				transform: translateY(-20px);
			}
		}

		@keyframes fadeOutUp {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-20px);
				-ms-transform: translateY(-20px);
				transform: translateY(-20px);
			}
		}

		.fadeOutUp {
			-webkit-animation-name: fadeOutUp;
			animation-name: fadeOutUp;
		}

		@-webkit-keyframes fadeOutUpBig {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		@keyframes fadeOutUpBig {
			0% {
				opacity: 1;
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		.fadeOutUpBig {
			-webkit-animation-name: fadeOutUpBig;
			animation-name: fadeOutUpBig;
		}

		@-webkit-keyframes flip {
			0% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(0) scale(1);
				transform: perspective(400px) translateZ(0) rotateY(0) scale(1);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out;
			}

			40% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
				transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out;
			}

			50% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
				transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}

			80% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
				transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}

			100% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);
				transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}
		}

		@keyframes flip {
			0% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(0) scale(1);
				-ms-transform: perspective(400px) translateZ(0) rotateY(0) scale(1);
				transform: perspective(400px) translateZ(0) rotateY(0) scale(1);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out;
			}

			40% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
				-ms-transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
				transform: perspective(400px) translateZ(150px) rotateY(170deg) scale(1);
				-webkit-animation-timing-function: ease-out;
				animation-timing-function: ease-out;
			}

			50% {
				-webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
				-ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
				transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}

			80% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
				-ms-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
				transform: perspective(400px) translateZ(0) rotateY(360deg) scale(.95);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}

			100% {
				-webkit-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);
				-ms-transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);
				transform: perspective(400px) translateZ(0) rotateY(360deg) scale(1);
				-webkit-animation-timing-function: ease-in;
				animation-timing-function: ease-in;
			}
		}

		.animated.flip {
			-webkit-backface-visibility: visible;
			-ms-backface-visibility: visible;
			backface-visibility: visible;
			-webkit-animation-name: flip;
			animation-name: flip;
		}

		@-webkit-keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0;
			}

			40% {
				-webkit-transform: perspective(400px) rotateX(-10deg);
				transform: perspective(400px) rotateX(-10deg);
			}

			70% {
				-webkit-transform: perspective(400px) rotateX(10deg);
				transform: perspective(400px) rotateX(10deg);
			}

			100% {
				-webkit-transform: perspective(400px) rotateX(0deg);
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		@keyframes flipInX {
			0% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				-ms-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0;
			}

			40% {
				-webkit-transform: perspective(400px) rotateX(-10deg);
				-ms-transform: perspective(400px) rotateX(-10deg);
				transform: perspective(400px) rotateX(-10deg);
			}

			70% {
				-webkit-transform: perspective(400px) rotateX(10deg);
				-ms-transform: perspective(400px) rotateX(10deg);
				transform: perspective(400px) rotateX(10deg);
			}

			100% {
				-webkit-transform: perspective(400px) rotateX(0deg);
				-ms-transform: perspective(400px) rotateX(0deg);
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}
		}

		.flipInX {
			-webkit-backface-visibility: visible !important;
			-ms-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInX;
			animation-name: flipInX;
		}

		@-webkit-keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0;
			}

			40% {
				-webkit-transform: perspective(400px) rotateY(-10deg);
				transform: perspective(400px) rotateY(-10deg);
			}

			70% {
				-webkit-transform: perspective(400px) rotateY(10deg);
				transform: perspective(400px) rotateY(10deg);
			}

			100% {
				-webkit-transform: perspective(400px) rotateY(0deg);
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		@keyframes flipInY {
			0% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				-ms-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0;
			}

			40% {
				-webkit-transform: perspective(400px) rotateY(-10deg);
				-ms-transform: perspective(400px) rotateY(-10deg);
				transform: perspective(400px) rotateY(-10deg);
			}

			70% {
				-webkit-transform: perspective(400px) rotateY(10deg);
				-ms-transform: perspective(400px) rotateY(10deg);
				transform: perspective(400px) rotateY(10deg);
			}

			100% {
				-webkit-transform: perspective(400px) rotateY(0deg);
				-ms-transform: perspective(400px) rotateY(0deg);
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}
		}

		.flipInY {
			-webkit-backface-visibility: visible !important;
			-ms-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipInY;
			animation-name: flipInY;
		}

		@-webkit-keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px) rotateX(0deg);
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0;
			}
		}

		@keyframes flipOutX {
			0% {
				-webkit-transform: perspective(400px) rotateX(0deg);
				-ms-transform: perspective(400px) rotateX(0deg);
				transform: perspective(400px) rotateX(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: perspective(400px) rotateX(90deg);
				-ms-transform: perspective(400px) rotateX(90deg);
				transform: perspective(400px) rotateX(90deg);
				opacity: 0;
			}
		}

		.flipOutX {
			-webkit-animation-name: flipOutX;
			animation-name: flipOutX;
			-webkit-backface-visibility: visible !important;
			-ms-backface-visibility: visible !important;
			backface-visibility: visible !important;
		}

		@-webkit-keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px) rotateY(0deg);
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0;
			}
		}

		@keyframes flipOutY {
			0% {
				-webkit-transform: perspective(400px) rotateY(0deg);
				-ms-transform: perspective(400px) rotateY(0deg);
				transform: perspective(400px) rotateY(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: perspective(400px) rotateY(90deg);
				-ms-transform: perspective(400px) rotateY(90deg);
				transform: perspective(400px) rotateY(90deg);
				opacity: 0;
			}
		}

		.flipOutY {
			-webkit-backface-visibility: visible !important;
			-ms-backface-visibility: visible !important;
			backface-visibility: visible !important;
			-webkit-animation-name: flipOutY;
			animation-name: flipOutY;
		}

		@-webkit-keyframes lightSpeedIn {
			0% {
				-webkit-transform: translateX(100%) skewX(-30deg);
				transform: translateX(100%) skewX(-30deg);
				opacity: 0;
			}

			60% {
				-webkit-transform: translateX(-20%) skewX(30deg);
				transform: translateX(-20%) skewX(30deg);
				opacity: 1;
			}

			80% {
				-webkit-transform: translateX(0%) skewX(-15deg);
				transform: translateX(0%) skewX(-15deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: translateX(0%) skewX(0deg);
				transform: translateX(0%) skewX(0deg);
				opacity: 1;
			}
		}

		@keyframes lightSpeedIn {
			0% {
				-webkit-transform: translateX(100%) skewX(-30deg);
				-ms-transform: translateX(100%) skewX(-30deg);
				transform: translateX(100%) skewX(-30deg);
				opacity: 0;
			}

			60% {
				-webkit-transform: translateX(-20%) skewX(30deg);
				-ms-transform: translateX(-20%) skewX(30deg);
				transform: translateX(-20%) skewX(30deg);
				opacity: 1;
			}

			80% {
				-webkit-transform: translateX(0%) skewX(-15deg);
				-ms-transform: translateX(0%) skewX(-15deg);
				transform: translateX(0%) skewX(-15deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: translateX(0%) skewX(0deg);
				-ms-transform: translateX(0%) skewX(0deg);
				transform: translateX(0%) skewX(0deg);
				opacity: 1;
			}
		}

		.lightSpeedIn {
			-webkit-animation-name: lightSpeedIn;
			animation-name: lightSpeedIn;
			-webkit-animation-timing-function: ease-out;
			animation-timing-function: ease-out;
		}

		@-webkit-keyframes lightSpeedOut {
			0% {
				-webkit-transform: translateX(0%) skewX(0deg);
				transform: translateX(0%) skewX(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: translateX(100%) skewX(-30deg);
				transform: translateX(100%) skewX(-30deg);
				opacity: 0;
			}
		}

		@keyframes lightSpeedOut {
			0% {
				-webkit-transform: translateX(0%) skewX(0deg);
				-ms-transform: translateX(0%) skewX(0deg);
				transform: translateX(0%) skewX(0deg);
				opacity: 1;
			}

			100% {
				-webkit-transform: translateX(100%) skewX(-30deg);
				-ms-transform: translateX(100%) skewX(-30deg);
				transform: translateX(100%) skewX(-30deg);
				opacity: 0;
			}
		}

		.lightSpeedOut {
			-webkit-animation-name: lightSpeedOut;
			animation-name: lightSpeedOut;
			-webkit-animation-timing-function: ease-in;
			animation-timing-function: ease-in;
		}

		@-webkit-keyframes rotateIn {
			0% {
				-webkit-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(-200deg);
				transform: rotate(-200deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		@keyframes rotateIn {
			0% {
				-webkit-transform-origin: center center;
				-ms-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(-200deg);
				-ms-transform: rotate(-200deg);
				transform: rotate(-200deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: center center;
				-ms-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		.rotateIn {
			-webkit-animation-name: rotateIn;
			animation-name: rotateIn;
		}

		@-webkit-keyframes rotateInDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		@keyframes rotateInDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(-90deg);
				-ms-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		.rotateInDownLeft {
			-webkit-animation-name: rotateInDownLeft;
			animation-name: rotateInDownLeft;
		}

		@-webkit-keyframes rotateInDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		@keyframes rotateInDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		.rotateInDownRight {
			-webkit-animation-name: rotateInDownRight;
			animation-name: rotateInDownRight;
		}

		@-webkit-keyframes rotateInUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		@keyframes rotateInUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		.rotateInUpLeft {
			-webkit-animation-name: rotateInUpLeft;
			animation-name: rotateInUpLeft;
		}

		@-webkit-keyframes rotateInUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		@keyframes rotateInUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				-ms-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}

			100% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}
		}

		.rotateInUpRight {
			-webkit-animation-name: rotateInUpRight;
			animation-name: rotateInUpRight;
		}

		@-webkit-keyframes rotateOut {
			0% {
				-webkit-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(200deg);
				transform: rotate(200deg);
				opacity: 0;
			}
		}

		@keyframes rotateOut {
			0% {
				-webkit-transform-origin: center center;
				-ms-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: center center;
				-ms-transform-origin: center center;
				transform-origin: center center;
				-webkit-transform: rotate(200deg);
				-ms-transform: rotate(200deg);
				transform: rotate(200deg);
				opacity: 0;
			}
		}

		.rotateOut {
			-webkit-animation-name: rotateOut;
			animation-name: rotateOut;
		}

		@-webkit-keyframes rotateOutDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}
		}

		@keyframes rotateOutDownLeft {
			0% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}
		}

		.rotateOutDownLeft {
			-webkit-animation-name: rotateOutDownLeft;
			animation-name: rotateOutDownLeft;
		}

		@-webkit-keyframes rotateOutDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}
		}

		@keyframes rotateOutDownRight {
			0% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(-90deg);
				-ms-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}
		}

		.rotateOutDownRight {
			-webkit-animation-name: rotateOutDownRight;
			animation-name: rotateOutDownRight;
		}

		@-webkit-keyframes rotateOutUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}
		}

		@keyframes rotateOutUpLeft {
			0% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: left bottom;
				-ms-transform-origin: left bottom;
				transform-origin: left bottom;
				-webkit-transform: rotate(-90deg);
				-ms-transform: rotate(-90deg);
				transform: rotate(-90deg);
				opacity: 0;
			}
		}

		.rotateOutUpLeft {
			-webkit-animation-name: rotateOutUpLeft;
			animation-name: rotateOutUpLeft;
		}

		@-webkit-keyframes rotateOutUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}
		}

		@keyframes rotateOutUpRight {
			0% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				opacity: 1;
			}

			100% {
				-webkit-transform-origin: right bottom;
				-ms-transform-origin: right bottom;
				transform-origin: right bottom;
				-webkit-transform: rotate(90deg);
				-ms-transform: rotate(90deg);
				transform: rotate(90deg);
				opacity: 0;
			}
		}

		.rotateOutUpRight {
			-webkit-animation-name: rotateOutUpRight;
			animation-name: rotateOutUpRight;
		}

		@-webkit-keyframes slideInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			100% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}
		}

		@keyframes slideInDown {
			0% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}

			100% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}
		}

		.slideInDown {
			-webkit-animation-name: slideInDown;
			animation-name: slideInDown;
		}

		@-webkit-keyframes slideInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes slideInLeft {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}

			100% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.slideInLeft {
			-webkit-animation-name: slideInLeft;
			animation-name: slideInLeft;
		}

		@-webkit-keyframes slideInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			100% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}
		}

		@keyframes slideInRight {
			0% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}

			100% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}
		}

		.slideInRight {
			-webkit-animation-name: slideInRight;
			animation-name: slideInRight;
		}

		@-webkit-keyframes slideOutLeft {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		@keyframes slideOutLeft {
			0% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(-2000px);
				-ms-transform: translateX(-2000px);
				transform: translateX(-2000px);
			}
		}

		.slideOutLeft {
			-webkit-animation-name: slideOutLeft;
			animation-name: slideOutLeft;
		}

		@-webkit-keyframes slideOutRight {
			0% {
				-webkit-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		@keyframes slideOutRight {
			0% {
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(2000px);
				-ms-transform: translateX(2000px);
				transform: translateX(2000px);
			}
		}

		.slideOutRight {
			-webkit-animation-name: slideOutRight;
			animation-name: slideOutRight;
		}

		@-webkit-keyframes slideOutUp {
			0% {
				-webkit-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		@keyframes slideOutUp {
			0% {
				-webkit-transform: translateY(0);
				-ms-transform: translateY(0);
				transform: translateY(0);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateY(-2000px);
				-ms-transform: translateY(-2000px);
				transform: translateY(-2000px);
			}
		}

		.slideOutUp {
			-webkit-animation-name: slideOutUp;
			animation-name: slideOutUp;
		}

		@-webkit-keyframes hinge {
			0% {
				-webkit-transform: rotate(0);
				transform: rotate(0);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			20%,
			60% {
				-webkit-transform: rotate(80deg);
				transform: rotate(80deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			40% {
				-webkit-transform: rotate(60deg);
				transform: rotate(60deg);
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			80% {
				-webkit-transform: rotate(60deg) translateY(0);
				transform: rotate(60deg) translateY(0);
				opacity: 1;
				-webkit-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			100% {
				-webkit-transform: translateY(700px);
				transform: translateY(700px);
				opacity: 0;
			}
		}

		@keyframes hinge {
			0% {
				-webkit-transform: rotate(0);
				-ms-transform: rotate(0);
				transform: rotate(0);
				-webkit-transform-origin: top left;
				-ms-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			20%,
			60% {
				-webkit-transform: rotate(80deg);
				-ms-transform: rotate(80deg);
				transform: rotate(80deg);
				-webkit-transform-origin: top left;
				-ms-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			40% {
				-webkit-transform: rotate(60deg);
				-ms-transform: rotate(60deg);
				transform: rotate(60deg);
				-webkit-transform-origin: top left;
				-ms-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			80% {
				-webkit-transform: rotate(60deg) translateY(0);
				-ms-transform: rotate(60deg) translateY(0);
				transform: rotate(60deg) translateY(0);
				opacity: 1;
				-webkit-transform-origin: top left;
				-ms-transform-origin: top left;
				transform-origin: top left;
				-webkit-animation-timing-function: ease-in-out;
				animation-timing-function: ease-in-out;
			}

			100% {
				-webkit-transform: translateY(700px);
				-ms-transform: translateY(700px);
				transform: translateY(700px);
				opacity: 0;
			}
		}

		.hinge {
			-webkit-animation-name: hinge;
			animation-name: hinge;
		}

		/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

		@-webkit-keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-100%) rotate(-120deg);
				transform: translateX(-100%) rotate(-120deg);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0px) rotate(0deg);
				transform: translateX(0px) rotate(0deg);
			}
		}

		@keyframes rollIn {
			0% {
				opacity: 0;
				-webkit-transform: translateX(-100%) rotate(-120deg);
				-ms-transform: translateX(-100%) rotate(-120deg);
				transform: translateX(-100%) rotate(-120deg);
			}

			100% {
				opacity: 1;
				-webkit-transform: translateX(0px) rotate(0deg);
				-ms-transform: translateX(0px) rotate(0deg);
				transform: translateX(0px) rotate(0deg);
			}
		}

		.rollIn {
			-webkit-animation-name: rollIn;
			animation-name: rollIn;
		}

		/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

		@-webkit-keyframes rollOut {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0px) rotate(0deg);
				transform: translateX(0px) rotate(0deg);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(100%) rotate(120deg);
				transform: translateX(100%) rotate(120deg);
			}
		}

		@keyframes rollOut {
			0% {
				opacity: 1;
				-webkit-transform: translateX(0px) rotate(0deg);
				-ms-transform: translateX(0px) rotate(0deg);
				transform: translateX(0px) rotate(0deg);
			}

			100% {
				opacity: 0;
				-webkit-transform: translateX(100%) rotate(120deg);
				-ms-transform: translateX(100%) rotate(120deg);
				transform: translateX(100%) rotate(120deg);
			}
		}

		.rollOut {
			-webkit-animation-name: rollOut;
			animation-name: rollOut;
		}

		.shop {
			margin: 4%;
		}

		/* Added css from template End */
	</style>
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>

	<header>

		<div class="container" id="#home">
			<div class="logo">

				<a>SPARTAN <span>CLUB</span> </a>
				<a><i class="fa-solid fa-dumbbell"></i> <span>Welcome</span><?php echo " " . $_SESSION["name"]; ?></a>

			</div>

			<a href="javascript:void(0)" class="ham-burger">
				<span></span>
				<span></span>
			</a>

			<div class="nav">
				<ul>
					
					<li><a href="#Shop"><i class="fa-solid fa-shop"></i> Shop</a></li>
					<li><a href="#service"><i class="fa-solid fa-truck-front"></i> Services</a></li>
					<li><a href="cart.php"><i class="fa-solid fa-cart-shopping"><span class="badge">0</span></i> My Cart</a></li>
					<li><a href="#contact"><i class="fa-solid fa-envelope"></i> Contact us</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>

					<!-- login -->

					<!-- Search bar and button -->
					<div class="navbar-form navbar-left"> <!-- Added class navbar-form -->
						<div class="form-group">
							<input type="search" class="form-control" placeholder="Search" id="search" />
						</div>
						<a href="#Shop" class="go-down"><button type="button" class="btn" id="search_btn" style="color: #ec4141;">Search</button></a>
					</div>
					<!-- End Search button -->
				</ul>
			</div>

		</div>
	</header>

	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<!-- Start Products -->
	<div class="container-fluid" style="margin-top:1%;margin-bottom:1%;" id="Shop">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading" style="background-color:#c11325;">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>


	</div>
	<!-- Start Service -->
	<section class="service" id="service">
		<div class="container">
			<div class="content">
				<div class="text box wow slideInLeft">
					<h2>Services</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
					
				</div>
				<div class="accordian box wow slideInRight">
					<div class="accordian-container active">
						<div class="head">
							<h4>Cardiovascular Equipment</h4>
							<span class="fa fa-angle-down"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Strength Training Equipment</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Group Fitness Class</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
					<div class="accordian-container">
						<div class="head">
							<h4>Other Services</h4>
							<span class="fa fa-angle-up"></span>
						</div>
						<div class="body">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Service -->
	<!-- Start Contact -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="content">
				<div class="box form wow slideInLeft">
					<form action="https://formsubmit.co/zainabchokor22@gmail.com" method="POST">
						<input type="text" name="name" placeholder="Enter Name" required>
						<input type="text" name="email" placeholder="Enter Email" required>
						<input type="text" placeholder="Enter Mobile" required>
						<textarea name="message" placeholder="Enter Message" required></textarea>
						<button type="submit">Send Message</button>
					</form>

				</div>
				<div class="box text wow slideInRight">
					<h2>Get In Touch</h2>
					<p class="title-p">We value your feedback and inquiries. Feel free to contact us for any questions or assistance you may need. We're here to help!</p>
					<div class="info">
						<ul>

							<li><span class="fa fa-map-marker"></span> Beirut - Lebanon</li>
							<li><span class="fa fa-phone"></span> +961 81 629026</li>
							<li><span class="fa fa-envelope"></span> info@gym.com</li>

						</ul>
					</div>
					<div class="social">
						<a href=""><span class="fa fa-facebook"></span></a>
						<a href=""><span class="fa fa-linkedin"></span></a>
						<a href=""><span class="fa fa-skype"></span></a>
						<a href=""><span class="fa fa-youtube-play"></span></a>
					</div>

					<div class="copy">
						PowerBy &copy; Mostafa & Zeinab <i class="fa-solid fa-dumbbell fa-flip"></i>
					</div>

				</div>
			</div>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2059.3836536386443!2d35.50410361079416!3d33.85701886065232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f17679b3a376b%3A0xc0b1c9c699589873!2sEsparta%20fitness%20centre!5e0!3m2!1sen!2slb!4v1694427661457!5m2!1sen!2slb" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>

	<!-- End Contact -->


	<!-- Added JS from other template-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {

			$(".ham-burger, .nav ul li a").click(function() {

				$(".nav").toggleClass("open")

				$(".ham-burger").toggleClass("active");
			})
			$(".accordian-container").click(function() {
				$(".accordian-container").children(".body").slideUp();
				$(".accordian-container").removeClass("active")
				$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
				$(this).children(".body").slideDown();
				$(this).addClass("active")
				$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
			})

			$(".nav ul li a, .go-down").click(function(event) {
				if (this.hash !== "") {

					event.preventDefault();

					var hash = this.hash;

					$('html,body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function() {
						window.location.hash = hash;
					});

					// add active class in navigation
					$(".nav ul li a").removeClass("active")
					$(this).addClass("active")
				}
			})
		})
	</script>
	<script src="js/wow.min.js"></script>
	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 0,
		});
		wow.init();
	</script>

</body>

</html>