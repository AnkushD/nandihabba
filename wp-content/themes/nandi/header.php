<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>

<link rel="icon" href="/wp-content/themes/nandi/assets/images/favicon-1.png" type="image/x-icon" />
<link rel="shortcut icon" href="/wp-content/themes/nandi/assets/images/favicon-1.png" type="image/x-icon" />


<meta prefix="og: http://ogp.me/ns#" property="og:url"           content="http://nandihabba.com/" />
<meta prefix="og: http://ogp.me/ns#" property="og:type"          content="website" />
<meta prefix="og: http://ogp.me/ns#" property="og:title"         content="Nandi Habba 2018" />
<meta prefix="og: http://ogp.me/ns#" property="og:description"   content="Enjoy local foods, drinks, arts, culture, games and sports at Nandi Habba 2018!" />
<meta prefix="og: http://ogp.me/ns#" property="og:image"         content="http://nandihabba.com/wp-content/themes/nandi/assets/images/SOCIAL.png" />


<meta name="twitter:card" content="summary_large_image">
<!-- <meta name="twitter:site" content="@s"> -->
<meta name="twitter:creator" content="@nkush">
<meta name="twitter:title" content="Nandi Habba 2018">
<meta name="twitter:description" content="Enjoy local foods, drinks, arts, culture, games and sports at Nandi Habba 2018!">
<meta name="twitter:image" content="http://nandihabba.com/wp-content/themes/nandi/assets/images/SOCIAL.png" />


<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <!--
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
    -->

	<header id="masthead" class="site-header n-site-header clearfix" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>


        <div class="n-left-header">
            <ul class="list-inline">
                <li class="n-brand-icon">
                    <a href="/">
                        <!-- <img src="/wp-content/themes/nandi/assets/images/NH_LOGO.svg" alt="nandi_logo" /> -->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="341px" height="188px" viewBox="0 0 341 188" enable-background="new 0 0 341 188" xml:space="preserve">
                        <g>
                            <path fill="#00CE2F" d="M111.92,0C111.92,0,0.916,185.711,0,187.355h224.857L111.92,0z"/>
                            <g>
                                <path fill="#FFFFFF" d="M84.162,103.875c3.266,0.632,4.896,1.942,4.896,3.931c0.471,3.023,0.705,5.758,0.705,8.203v2.177
                                    c0,5.388-1.121,10.017-3.365,13.887h-0.061c-0.928,0-2.963-1.498-6.105-4.495c-1.895-1.988-3.697-4.043-5.401-6.166
                                    c-0.216,7.39-0.497,11.084-0.849,11.084c-0.441,0.229-1.169,0.342-2.178,0.342c-0.159-0.039-0.367-0.06-0.623-0.06H70.84
                                    c-0.135,0-0.416-1.263-0.846-3.79c-1.076-6.221-1.614-10.991-1.614-14.31v-1.128c0.188-3.749,0.444-5.758,0.766-6.025
                                    c1.788,0.562,4.456,2.016,8.003,4.354c2.041,1.357,4.428,3.346,7.156,5.965v-0.08l-0.285-13.807L84.162,103.875z"/>
                                <path fill="#FFFFFF" d="M102.605,112.32c2.699,2.767,4.736,7.188,6.105,13.263c0.767,3.223,1.15,5.515,1.15,6.872l-0.201,0.101
                                    c-1.291,0-2.784-0.893-4.475-2.681c-2.232,1.976-4.907,2.962-8.023,2.962c-3.145,0-5.18-1.431-6.107-4.292
                                    c-0.188-0.819-0.314-1.808-0.383-2.962c0-6.209,2.991-10.408,8.969-12.598C101.133,112.542,102.119,112.32,102.605,112.32z
                                    M95.066,125.482c0,1.489,0.988,2.351,2.963,2.579c1.262,0,2.344-0.631,3.246-1.895l0.281-1.068c0-1.491-1.049-2.473-3.145-2.942
                                    h-0.687c-0.952,0-1.745,0.57-2.379,1.712C95.16,124.688,95.066,125.226,95.066,125.482z"/>
                                <path fill="#FFFFFF" d="M111.211,112.32c1.922,0.444,3.291,1.082,4.111,1.915c1.987-1.277,4.32-1.915,6.994-1.915
                                    c2.928,0,4.883,1.788,5.865,5.36c0.375,1.519,0.562,3.245,0.562,5.182c0,3.412-0.543,6.738-1.631,9.975h-2.884
                                    c-0.12,0-0.181-0.066-0.181-0.201v-0.665l0.484-6.892v-0.102c0-3.318-0.994-4.979-2.982-4.979h-0.082
                                    c-3.078,0-5.059,1.848-5.943,5.543c-0.203,1.652-0.305,2.869-0.305,3.648c0.135,1.249,0.201,2.176,0.201,2.78v0.102
                                    c0,0.444-0.221,0.665-0.664,0.665h-0.301c-2.137,0-3.379-3.896-3.731-11.69c0-0.846-0.032-1.612-0.099-2.297
                                    C110.761,115.391,110.955,113.247,111.211,112.32z"/>
                                <path fill="#FFFFFF" d="M145.787,103.895c0.832,0,1.248,0.391,1.248,1.17c1.127,4.783,1.693,9.734,1.693,14.853
                                    c0,6.624-1.102,10.811-3.307,12.558c-0.444,0.242-0.953,0.361-1.531,0.361c-4.932,0-8.829-0.999-11.688-3.002
                                    c-1.762-1.479-2.643-3.467-2.643-5.967c0-4.461,2.249-7.443,6.753-8.949c1.797-0.496,3.372-0.745,4.713-0.745h1.835l0.143,0.081
                                    c0.456-6.758,0.799-10.139,1.026-10.139C144.945,103.968,145.53,103.895,145.787,103.895z M135.285,124.674v0.081
                                    c0,1.371,0.814,2.325,2.438,2.861c0.255,0.054,0.525,0.081,0.807,0.081c1.479,0,2.7-0.806,3.667-2.418
                                    c0.15-0.524,0.224-0.895,0.224-1.108c0-1.13-0.713-2.204-2.135-3.226c-0.23-0.147-0.6-0.275-1.111-0.383
                                    c-1.451,0-2.693,1.008-3.729,3.024C135.338,124.043,135.285,124.406,135.285,124.674z"/>
                                <path fill="#FFFFFF" d="M151.533,117.823h0.221c2.258,0.2,3.479,0.457,3.668,0.765v1.895c-0.229,7.458-0.584,11.321-1.068,11.59
                                    c0,0.43-0.229,0.686-0.686,0.765h-0.301c-1.479,0-2.217-0.529-2.217-1.593c-0.257-1.812-0.385-4.306-0.385-7.476v-4.797
                                    C150.766,118.206,151.021,117.823,151.533,117.823z M153.285,112.178c1.371,0,2.057,0.512,2.057,1.532
                                    c0,1.424-0.355,2.138-1.066,2.138c-0.66,0-1.172,0.02-1.533,0.06c-1.209-0.093-1.814-0.524-1.814-1.29
                                    c-0.055,0-0.081-0.102-0.081-0.303v-1.289c0-0.471,0.505-0.754,1.511-0.848H153.285z"/>
                                <path fill="#FFFFFF" d="M67.701,138.392l1.308,12.718l0.667,0.061h0.767c2.366,0,3.716-0.738,4.05-2.218v-5.019
                                    c0-1.949,0.156-3.123,0.465-3.527c0.658-0.993,1.874-1.49,3.648-1.49c1.089,0,1.633,0.107,1.633,0.322
                                    c0.295,2.821,0.578,5.778,0.846,8.867h-0.08c0.309,2.93,0.463,5.859,0.463,8.789v0.926c0,6.343-2.062,9.514-6.186,9.514
                                    c-0.311-0.537-0.814-2.426-1.514-5.664c-0.605-0.912-1.773-1.371-3.507-1.371c-0.833,0-1.252,0.088-1.252,0.263
                                    c0,1.854-0.562,3.958-1.69,6.308c-0.59,0.056-0.961,0.08-1.109,0.08c-1.061,0-2.297-0.199-3.707-0.604
                                    c-1.613-6.637-2.42-12.086-2.42-16.346c0-3.547,0.303-6.744,0.908-9.594C61.984,139.065,64.223,138.392,67.701,138.392z"/>
                                <path fill="#FFFFFF" d="M94.902,146.817c2.701,2.768,4.736,7.189,6.106,13.262c0.767,3.225,1.147,5.516,1.147,6.871l-0.201,0.102
                                    c-1.289,0-2.781-0.894-4.473-2.679c-2.23,1.974-4.904,2.962-8.023,2.962c-3.146,0-5.179-1.43-6.105-4.293
                                    c-0.188-0.819-0.316-1.807-0.383-2.963c0-6.207,2.989-10.406,8.969-12.597C93.429,147.039,94.418,146.817,94.902,146.817z
                                    M87.365,159.977c0,1.492,0.986,2.352,2.961,2.58c1.264,0,2.346-0.631,3.246-1.895l0.281-1.068c0-1.492-1.047-2.471-3.143-2.942
                                    h-0.686c-0.955,0-1.748,0.572-2.38,1.714C87.459,159.185,87.365,159.723,87.365,159.977z"/>
                                <path fill="#FFFFFF" d="M104.139,138.25c2.297,0.457,3.447,0.873,3.447,1.25c0.254,1.612,0.455,3.568,0.604,5.865h-0.079
                                    l0.079,0.16c0,0.688,0.047,1.762,0.142,3.225c3.171,0.539,5.615,1.129,7.337,1.774c2.875,1.196,4.688,2.782,5.441,4.757
                                    c0.389,1.034,0.584,1.942,0.584,2.721h-0.083l0.083,0.162c0,4.365-2.055,7.201-6.167,8.505c-1.56,0.443-3.272,0.665-5.14,0.665
                                    c-3.225,0-5.65-3.036-7.276-9.109c-0.39-2.284-0.585-3.48-0.585-3.589h0.082c-0.203-1.021-0.303-2.565-0.303-4.636v-0.221
                                    C102.305,146.219,102.916,142.376,104.139,138.25z M109.803,158.749c0,1.692,1.047,2.694,3.143,3.004
                                    c0.955,0,1.891-0.296,2.803-0.887c0.928-0.753,1.391-1.586,1.391-2.5v-0.201c0-1.397-0.98-2.433-2.944-3.104
                                    c-0.482-0.094-0.798-0.141-0.944-0.141c-1.6,0-2.676,0.805-3.227,2.416C109.916,157.566,109.842,158.036,109.803,158.749z"/>
                                <path fill="#FFFFFF" d="M124.436,138.25c2.297,0.457,3.447,0.873,3.447,1.25c0.254,1.612,0.457,3.568,0.605,5.865h-0.084
                                    l0.084,0.16c0,0.688,0.047,1.762,0.14,3.225c3.171,0.539,5.616,1.129,7.337,1.774c2.875,1.196,4.689,2.782,5.441,4.757
                                    c0.389,1.034,0.584,1.942,0.584,2.721h-0.08l0.08,0.162c0,4.365-2.057,7.201-6.168,8.505c-1.557,0.443-3.271,0.665-5.139,0.665
                                    c-3.225,0-5.65-3.036-7.275-9.109c-0.391-2.284-0.586-3.48-0.586-3.589h0.082c-0.201-1.021-0.303-2.565-0.303-4.636v-0.221
                                    C122.602,146.219,123.212,142.376,124.436,138.25z M130.1,158.749c0,1.692,1.046,2.694,3.143,3.004
                                    c0.954,0,1.886-0.296,2.801-0.887c0.93-0.753,1.393-1.586,1.393-2.5v-0.201c0-1.397-0.98-2.433-2.943-3.104
                                    c-0.483-0.094-0.799-0.141-0.948-0.141c-1.598,0-2.671,0.805-3.224,2.416C130.212,157.566,130.141,158.036,130.1,158.749z"/>
                                <path fill="#FFFFFF" d="M155.738,146.817c2.699,2.768,4.736,7.189,6.106,13.262c0.765,3.225,1.149,5.516,1.149,6.871l-0.201,0.102
                                    c-1.289,0-2.781-0.894-4.475-2.679c-2.232,1.974-4.905,2.962-8.022,2.962c-3.144,0-5.179-1.43-6.106-4.293
                                    c-0.189-0.819-0.316-1.807-0.383-2.963c0-6.207,2.989-10.406,8.969-12.597C154.268,147.039,155.256,146.817,155.738,146.817z
                                    M148.199,159.977c0,1.492,0.988,2.352,2.963,2.58c1.262,0,2.346-0.631,3.246-1.895l0.281-1.068c0-1.492-1.047-2.471-3.143-2.942
                                    h-0.688c-0.951,0-1.746,0.572-2.377,1.714C148.293,159.185,148.199,159.723,148.199,159.977z"/>
                            </g>
                            <path fill="#333333" d="M226.938,187.355c0,0,111.004-185.71,111.92-187.355H114L226.938,187.355z"/>
                            <g>
                                <polygon fill="#FF24C1" points="210.438,97.702 205.121,90.643 207.581,104.717 		"/>
                                <polygon fill="#18B6B4" points="178.891,9.554 188.891,21.372 200.285,21.125 		"/>
                                <polygon fill="#FF24C1" points="208.176,105.003 225.9,92.828 217.81,81.41 		"/>
                                <polygon fill="#BF1FDB" points="158.871,41.8 180.434,55.149 187.523,40.92 		"/>
                                <polygon fill="#FB3069" points="187.672,42.196 181.434,54.734 187.28,51.264 		"/>
                                <polygon fill="#FD8337" points="210.756,36.414 226.066,36.414 226.066,22.262 		"/>
                                <polygon fill="#FD8337" points="225.52,21.81 202.209,21.81 209.922,36.228 		"/>
                                <polygon fill="#00CE2F" points="193.338,49.222 191.478,46.329 188.4,41.647 187.986,51.468 187.582,60.64 		"/>
                                <polygon fill="#00CE2F" points="209.719,37.268 194.496,49.169 225.513,59.285 		"/>
                                <polygon fill="#00CE2F" points="217.574,80.15 225.758,60.673 205.453,71.385 		"/>
                                <polygon fill="#00CE2F" points="205.347,72.115 210.924,96.487 217.331,80.79 		"/>
                                <polygon fill="#159D9F" points="226.07,58.857 226.07,37.145 210.492,37.145 		"/>
                                <polygon fill="#F32608" points="226.044,105.124 211.652,106.12 226.068,107.534 		"/>
                                <polygon fill="#F32608" points="200.709,23.324 188.543,40.561 193.63,48.416 		"/>
                                <polygon fill="#F32608" points="213.215,112.242 226.07,116.105 226.07,108.417 		"/>
                                <polygon fill="#159D9F" points="208.238,106.49 212.107,111.807 224.662,108.101 		"/>
                                <polygon fill="#FF24C1" points="226.07,131.25 226.07,117.18 208.578,127.405 		"/>
                                <polygon fill="#FF24C1" points="202.78,113.178 201.986,125.89 207.07,127.077 		"/>
                                <polygon fill="#FAE32F" points="208.729,105.612 226.044,104.434 226.057,93.595 		"/>
                                <polygon fill="#BF1FDB" points="148.691,49.099 178.742,54.935 157.723,41.928 		"/>
                                <polygon fill="#FF24C1" points="211.941,112.723 205.387,117.352 218.721,119.874 		"/>
                                <polygon fill="#FF24C1" points="218.74,120.632 205.016,118 207.795,127.03 		"/>
                                <polygon fill="#18B6B4" points="178.324,9.973 187.82,38.583 188.376,21.85 		"/>
                                <polygon fill="#18B6B4" points="200.929,21.815 189.072,22.07 188.521,39.382 		"/>
                                <polygon fill="#3AC1D4" points="195.639,61.46 224.561,59.712 194.177,49.804 		"/>
                                <polygon fill="#FAE32F" points="190.621,71.324 182.826,72.56 195.246,77.478 		"/>
                                <polygon fill="#FAE32F" points="196.394,77.822 203.859,71.68 191.488,71.324 		"/>
                                <polygon fill="#4FB1E0" points="182.619,73.234 196.211,90.024 195.929,78.503 		"/>
                                <polygon fill="#3AC1D4" points="193.182,66.955 183.699,71.709 190.572,70.633 		"/>
                                <polygon fill="#FD8337" points="204.226,89.647 197.184,91.296 206.813,104.532 		"/>
                                <polygon fill="#FF24C1" points="226.057,91.822 226.057,61.694 218.128,80.628 		"/>
                                <polygon fill="#4FB1E0" points="193.502,66.002 188.362,63.392 182.621,71.457 		"/>
                                <polygon fill="#FAE32F" points="196.128,62.135 204.865,70.907 224.818,60.401 		"/>
                                <polygon fill="#F32608" points="196.654,79.352 196.959,90.627 203.916,88.999 		"/>
                                <polygon fill="#4FB1E0" points="202.969,69.999 195.196,62.192 188.457,62.651 		"/>
                                <polygon fill="#00CE2F" points="204.621,72 196.852,78.384 201.102,84.067 210.139,96.134 		"/>
                                <polygon fill="#3AC1D4" points="194.938,61.506 193.555,50.484 187.752,61.997 		"/>
                                <polygon fill="#C3D92C" points="211.488,112.159 197.516,92.945 204.691,116.931 		"/>
                                <polygon fill="#FF24C1" points="242.42,97.702 247.734,90.643 245.277,104.717 		"/>
                                <polygon fill="#FF24C1" points="273.965,9.554 263.963,21.372 252.572,21.125 		"/>
                                <polygon fill="#FAE32F" points="244.682,105.003 226.957,92.828 235.047,81.41 		"/>
                                <polygon fill="#C3D92C" points="293.984,41.8 272.422,55.149 265.334,40.92 		"/>
                                <polygon fill="#FD8337" points="265.186,42.196 271.424,54.734 265.576,51.264 		"/>
                                <polygon fill="#BF1FDB" points="242.102,36.414 226.793,36.414 226.793,22.262 		"/>
                                <polygon fill="#BF1FDB" points="227.338,21.81 250.648,21.81 242.934,36.228 		"/>
                                <polygon fill="#00CE2F" points="259.52,49.222 261.379,46.329 264.457,41.647 264.869,51.468 265.275,60.64 		"/>
                                <polygon fill="#EF7367" points="243.139,37.268 258.359,49.169 227.342,59.285 		"/>
                                <polygon fill="#FD8337" points="235.283,80.15 227.102,60.673 247.402,71.385 		"/>
                                <polygon fill="#C3D92C" points="247.508,72.115 241.934,96.487 235.525,80.79 		"/>
                                <polygon fill="#FAE32F" points="226.785,58.857 226.785,37.145 242.365,37.145 		"/>
                                <polygon fill="#F32608" points="226.81,105.124 241.203,106.12 226.789,107.534 		"/>
                                <polygon fill="#C3D92C" points="252.148,23.324 264.313,40.561 259.226,48.416 		"/>
                                <polygon fill="#159D9F" points="239.641,112.242 226.785,116.105 226.785,108.417 		"/>
                                <polygon fill="#159D9F" points="244.617,106.49 240.747,111.807 228.194,108.101 		"/>
                                <polygon fill="#FD8337" points="226.785,131.25 226.785,117.18 244.277,127.405 		"/>
                                <polygon fill="#FD8337" points="250.076,113.178 250.869,125.89 245.787,127.077 		"/>
                                <polygon fill="#159D9F" points="244.127,105.612 226.812,104.434 226.799,93.595 		"/>
                                <polygon fill="#C3D92C" points="304.163,49.099 274.113,54.935 295.133,41.928 		"/>
                                <polygon fill="#FD8337" points="240.912,112.723 234.135,119.874 247.471,117.352 		"/>
                                <polygon fill="#FD8337" points="234.115,120.632 247.842,118 245.062,127.03 		"/>
                                <polygon fill="#FF24C1" points="274.533,9.973 265.035,38.583 264.48,21.85 		"/>
                                <polygon fill="#FF24C1" points="251.928,21.815 263.783,22.07 264.336,39.382 		"/>
                                <polygon fill="#FAE32F" points="257.219,61.46 228.296,59.712 258.677,49.804 		"/>
                                <polygon fill="#FD8337" points="262.236,71.324 270.029,72.56 257.609,77.478 		"/>
                                <polygon fill="#FD8337" points="256.46,77.822 248.996,71.68 261.369,71.324 		"/>
                                <polygon fill="#FD8337" points="270.238,73.234 256.645,90.024 256.926,78.503 		"/>
                                <polygon fill="#FD8337" points="259.674,66.955 269.156,71.709 262.283,70.633 		"/>
                                <polygon fill="#FD8337" points="248.627,89.647 255.672,91.296 246.041,104.532 		"/>
                                <polygon fill="#C3D92C" points="226.799,91.822 226.799,61.694 234.729,80.628 		"/>
                                <polygon fill="#C3D92C" points="259.354,66.002 264.492,63.392 270.236,71.457 		"/>
                                <polygon fill="#FF24C1" points="256.726,62.135 247.99,70.907 228.037,60.401 		"/>
                                <polygon fill="#F32608" points="256.201,79.352 255.896,90.627 248.939,88.999 		"/>
                                <polygon fill="#C3D92C" points="249.887,69.999 257.66,62.192 264.4,62.651 		"/>
                                <polygon fill="#C3D92C" points="248.234,72 256.006,78.384 251.754,84.067 242.715,96.134 		"/>
                                <polygon fill="#FAE32F" points="257.92,61.506 259.303,50.484 265.105,61.997 		"/>
                                <polygon fill="#C3D92C" points="241.367,112.159 255.34,92.945 248.166,116.931 		"/>
                                <polygon fill="#F32608" points="201.68,22.461 194.391,48.301 209.261,36.674 		"/>
                                <polygon fill="#C3D92C" points="251.177,22.461 258.467,48.301 243.593,36.674 		"/>
                            </g>
                            <g>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="210.438,97.702 205.121,90.643 
                                    207.581,104.717 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="178.891,9.554 188.891,21.372 
                                    200.285,21.125 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="208.176,105.003 225.9,92.828 
                                    217.81,81.41 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="158.871,41.8 180.434,55.149 
                                    187.523,40.92 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="187.672,42.196 181.434,54.734 
                                    187.28,51.264 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="210.756,36.414 226.066,36.414 
                                    226.066,22.262 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="225.52,21.81 202.209,21.81 
                                    209.922,36.228 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="193.338,49.222 191.478,46.329 
                                    188.4,41.647 187.986,51.468 187.582,60.64 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="209.719,37.268 194.496,49.169 
                                    225.513,59.285 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="217.574,80.15 225.758,60.673 
                                    205.453,71.385 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="205.347,72.115 210.924,96.487 
                                    217.331,80.79 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.07,58.857 226.07,37.145 
                                    210.492,37.145 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.044,105.124 211.652,106.12 
                                    226.068,107.534 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="200.709,23.324 188.543,40.561 
                                    193.63,48.416 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="213.215,112.242 226.07,116.105 
                                    226.07,108.417 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="208.238,106.49 212.107,111.807 
                                    224.662,108.101 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.07,131.25 226.07,117.18 
                                    208.578,127.405 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="202.78,113.178 201.986,125.89 
                                    207.07,127.077 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="208.729,105.612 226.044,104.434 
                                    226.057,93.595 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="148.691,49.099 178.742,54.935 
                                    157.723,41.928 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="211.941,112.723 205.387,117.352 
                                    218.721,119.874 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="218.74,120.632 205.016,118 
                                    207.795,127.03 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="178.324,9.973 187.82,38.583 
                                    188.376,21.85 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="200.929,21.815 189.072,22.07 
                                    188.521,39.382 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="195.639,61.46 224.561,59.712 
                                    194.177,49.804 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="190.621,71.324 182.826,72.56 
                                    195.246,77.478 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="196.394,77.822 203.859,71.68 
                                    191.488,71.324 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="182.619,73.234 196.211,90.024 
                                    195.929,78.503 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="193.182,66.955 183.699,71.709 
                                    190.572,70.633 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="204.226,89.647 197.184,91.296 
                                    206.813,104.532 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.057,91.822 226.057,61.694 
                                    218.128,80.628 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="193.502,66.002 188.362,63.392 
                                    182.621,71.457 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="196.128,62.135 204.865,70.907 
                                    224.818,60.401 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="196.654,79.352 196.959,90.627 
                                    203.916,88.999 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="202.969,69.999 195.196,62.192 
                                    188.457,62.651 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="204.621,72 196.852,78.384 
                                    201.102,84.067 210.139,96.134 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="194.938,61.506 193.555,50.484 
                                    187.752,61.997 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="211.488,112.159 197.516,92.945 
                                    204.691,116.931 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="242.42,97.702 247.734,90.643 
                                    245.277,104.717 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="273.965,9.554 263.963,21.372 
                                    252.572,21.125 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="244.682,105.003 226.957,92.828 
                                    235.047,81.41 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="293.984,41.8 272.422,55.149 
                                    265.334,40.92 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="265.186,42.196 271.424,54.734 
                                    265.576,51.264 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="242.102,36.414 226.793,36.414 
                                    226.793,22.262 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="227.338,21.81 250.648,21.81 
                                    242.934,36.228 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="259.52,49.222 261.379,46.329 
                                    264.457,41.647 264.869,51.468 265.275,60.64 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="243.139,37.268 258.359,49.169 
                                    227.342,59.285 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="235.283,80.15 227.102,60.673 
                                    247.402,71.385 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="247.508,72.115 241.934,96.487 
                                    235.525,80.79 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.785,58.857 226.785,37.145 
                                    242.365,37.145 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.81,105.124 241.203,106.12 
                                    226.789,107.534 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="252.148,23.324 264.313,40.561 
                                    259.226,48.416 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="239.641,112.242 226.785,116.105 
                                    226.785,108.417 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="244.617,106.49 240.747,111.807 
                                    228.194,108.101 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.785,131.25 226.785,117.18 
                                    244.277,127.405 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="250.076,113.178 250.869,125.89 
                                    245.787,127.077 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="244.127,105.612 226.812,104.434 
                                    226.799,93.595 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="304.163,49.099 274.113,54.935 
                                    295.133,41.928 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="240.912,112.723 234.135,119.874 
                                    247.471,117.352 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="234.115,120.632 247.842,118 
                                    245.062,127.03 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="274.533,9.973 265.035,38.583 
                                    264.48,21.85 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="251.928,21.815 263.783,22.07 
                                    264.336,39.382 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="257.219,61.46 228.296,59.712 
                                    258.677,49.804 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="262.236,71.324 270.029,72.56 
                                    257.609,77.478 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="256.46,77.822 248.996,71.68 
                                    261.369,71.324 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="270.238,73.234 256.645,90.024 
                                    256.926,78.503 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="259.674,66.955 269.156,71.709 
                                    262.283,70.633 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="248.627,89.647 255.672,91.296 
                                    246.041,104.532 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="226.799,91.822 226.799,61.694 
                                    234.729,80.628 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="259.354,66.002 264.492,63.392 
                                    270.236,71.457 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="256.726,62.135 247.99,70.907 
                                    228.037,60.401 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="256.201,79.352 255.896,90.627 
                                    248.939,88.999 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="249.887,69.999 257.66,62.192 
                                    264.4,62.651 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="248.234,72 256.006,78.384 
                                    251.754,84.067 242.715,96.134 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="257.92,61.506 259.303,50.484 
                                    265.105,61.997 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="241.367,112.159 255.34,92.945 
                                    248.166,116.931 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="201.68,22.461 194.391,48.301 
                                    209.261,36.674 		"/>
                                <polygon fill="none" stroke="#333333" stroke-width="0.25" stroke-miterlimit="10" points="251.177,22.461 258.467,48.301 
                                    243.593,36.674 		"/>
                            </g>
                        </g>
                        </svg>
                    </a>
                </li>
                <li class="n-date">
                     <span>3 - 4 Feb </span>
                     <span>2018</span>
                </li>
                <li class="n-action">
                    <a class="btn n-angled-btn js-ticket-tooltip" href="#/">COUNT ME IN!</a>
                </li>
            </ul>
        </div>

        <div class="dropdown n-share-dropdown n-header-share-dropdown">
            <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Recommend Nandi Habba
                <span class="fa fa-share"></span>
            </a>

            <ul class="dropdown-menu pull-right" aria-labelledby="dLabel">
                <div id="header-share"></div>
            </ul>
        </div>
    
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">

