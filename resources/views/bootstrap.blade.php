@extends('layouts.app')

@section('content')
    <div class="container">
        <style>
            .color-circle {
                width: 100%;
                min-height: 100px;
                min-width: 100px;
                margin: 10px 0;
            }
        </style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="color-circle bg-primary"></div>
                    <div>Primary</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-secondary"></div>
                    <div>Secondary</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-success"></div>
                    <div>Success</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="color-circle bg-danger"></div>
                    <div>Danger</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-warning"></div>
                    <div>Warning</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-info"></div>
                    <div>Info</div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="color-circle bg-light"></div>
                    <div>Light</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-dark"></div>
                    <div>Dark</div>
                </div>
                <div class="col-4">
                    <div class="color-circle bg-white"></div>
                    <div>White</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">FontAwesome 5</div>
            <div class="card-body">
                <i class="m-2 fa fa-2x fa-fw fa-spinner fa-spin text-danger"></i>

                <i class="m-2 fa-2x fab fa-500px"></i>
                <i class="m-2 fa-2x fab fa-accessible-icon"></i>
                <i class="m-2 fa-2x fab fa-accusoft"></i>
                <i class="m-2 fa-2x fas fa-address-book"></i>
                <i class="m-2 fa-2x far fa-address-book"></i>
                <i class="m-2 fa-2x fas fa-address-card"></i>
                <i class="m-2 fa-2x far fa-address-card"></i>
                <i class="m-2 fa-2x fas fa-adjust"></i>
                <i class="m-2 fa-2x fab fa-adn"></i>
                <i class="m-2 fa-2x fab fa-adversal"></i>
                <i class="m-2 fa-2x fab fa-affiliatetheme"></i>
                <i class="m-2 fa-2x fas fa-air-freshener"></i>
                <i class="m-2 fa-2x fab fa-algolia"></i>
                <i class="m-2 fa-2x fas fa-align-center"></i>
                <i class="m-2 fa-2x fas fa-align-justify"></i>
                <i class="m-2 fa-2x fas fa-align-left"></i>
                <i class="m-2 fa-2x fas fa-align-right"></i>
                <i class="m-2 fa-2x fas fa-allergies"></i>
                <i class="m-2 fa-2x fab fa-amazon"></i>
                <i class="m-2 fa-2x fab fa-amazon-pay"></i>
                <i class="m-2 fa-2x fas fa-ambulance"></i>
                <i class="m-2 fa-2x fas fa-american-sign-language-interpreting"></i>
                <i class="m-2 fa-2x fab fa-amilia"></i>
                <i class="m-2 fa-2x fas fa-anchor"></i>
                <i class="m-2 fa-2x fab fa-android"></i>
                <i class="m-2 fa-2x fab fa-angellist"></i>
                <i class="m-2 fa-2x fas fa-angle-double-down"></i>
                <i class="m-2 fa-2x fas fa-angle-double-left"></i>
                <i class="m-2 fa-2x fas fa-angle-double-right"></i>
                <i class="m-2 fa-2x fas fa-angle-double-up"></i>
                <i class="m-2 fa-2x fas fa-angle-down"></i>
                <i class="m-2 fa-2x fas fa-angle-left"></i>
                <i class="m-2 fa-2x fas fa-angle-right"></i>
                <i class="m-2 fa-2x fas fa-angle-up"></i>
                <i class="m-2 fa-2x fas fa-angry"></i>
                <i class="m-2 fa-2x far fa-angry"></i>
                <i class="m-2 fa-2x fab fa-angrycreative"></i>
                <i class="m-2 fa-2x fab fa-angular"></i>
                <i class="m-2 fa-2x fab fa-app-store"></i>
                <i class="m-2 fa-2x fab fa-app-store-ios"></i>
                <i class="m-2 fa-2x fab fa-apper"></i>
                <i class="m-2 fa-2x fab fa-apple"></i>
                <i class="m-2 fa-2x fas fa-apple-alt"></i>
                <i class="m-2 fa-2x fab fa-apple-pay"></i>
                <i class="m-2 fa-2x fas fa-archive"></i>
                <i class="m-2 fa-2x fas fa-archway"></i>
                <i class="m-2 fa-2x fas fa-arrow-alt-circle-down"></i>
                <i class="m-2 fa-2x far fa-arrow-alt-circle-down"></i>
                <i class="m-2 fa-2x fas fa-arrow-alt-circle-left"></i>
                <i class="m-2 fa-2x far fa-arrow-alt-circle-left"></i>
                <i class="m-2 fa-2x fas fa-arrow-alt-circle-right"></i>
                <i class="m-2 fa-2x far fa-arrow-alt-circle-right"></i>
                <i class="m-2 fa-2x fas fa-arrow-alt-circle-up"></i>
                <i class="m-2 fa-2x far fa-arrow-alt-circle-up"></i>
                <i class="m-2 fa-2x fas fa-arrow-circle-down"></i>
                <i class="m-2 fa-2x fas fa-arrow-circle-left"></i>
                <i class="m-2 fa-2x fas fa-arrow-circle-right"></i>
                <i class="m-2 fa-2x fas fa-arrow-circle-up"></i>
                <i class="m-2 fa-2x fas fa-arrow-down"></i>
                <i class="m-2 fa-2x fas fa-arrow-left"></i>
                <i class="m-2 fa-2x fas fa-arrow-right"></i>
                <i class="m-2 fa-2x fas fa-arrow-up"></i>
                <i class="m-2 fa-2x fas fa-arrows-alt"></i>
                <i class="m-2 fa-2x fas fa-arrows-alt-h"></i>
                <i class="m-2 fa-2x fas fa-arrows-alt-v"></i>
                <i class="m-2 fa-2x fas fa-assistive-listening-systems"></i>
                <i class="m-2 fa-2x fas fa-asterisk"></i>
                <i class="m-2 fa-2x fab fa-asymmetrik"></i>
                <i class="m-2 fa-2x fas fa-at"></i>
                <i class="m-2 fa-2x fas fa-atlas"></i>
                <i class="m-2 fa-2x fas fa-atom"></i>
                <i class="m-2 fa-2x fab fa-audible"></i>
                <i class="m-2 fa-2x fas fa-audio-description"></i>
                <i class="m-2 fa-2x fab fa-autoprefixer"></i>
                <i class="m-2 fa-2x fab fa-avianex"></i>
                <i class="m-2 fa-2x fab fa-aviato"></i>
                <i class="m-2 fa-2x fas fa-award"></i>
                <i class="m-2 fa-2x fab fa-aws"></i>
                <i class="m-2 fa-2x fas fa-backspace"></i>
                <i class="m-2 fa-2x fas fa-backward"></i>
                <i class="m-2 fa-2x fas fa-balance-scale"></i>
                <i class="m-2 fa-2x fas fa-ban"></i>
                <i class="m-2 fa-2x fas fa-band-aid"></i>
                <i class="m-2 fa-2x fab fa-bandcamp"></i>
                <i class="m-2 fa-2x fas fa-barcode"></i>
                <i class="m-2 fa-2x fas fa-bars"></i>
                <i class="m-2 fa-2x fas fa-baseball-ball"></i>
                <i class="m-2 fa-2x fas fa-basketball-ball"></i>
                <i class="m-2 fa-2x fas fa-bath"></i>
                <i class="m-2 fa-2x fas fa-battery-empty"></i>
                <i class="m-2 fa-2x fas fa-battery-full"></i>
                <i class="m-2 fa-2x fas fa-battery-half"></i>
                <i class="m-2 fa-2x fas fa-battery-quarter"></i>
                <i class="m-2 fa-2x fas fa-battery-three-quarters"></i>
                <i class="m-2 fa-2x fas fa-bed"></i>
                <i class="m-2 fa-2x fas fa-beer"></i>
                <i class="m-2 fa-2x fab fa-behance"></i>
                <i class="m-2 fa-2x fab fa-behance-square"></i>
                <i class="m-2 fa-2x fas fa-bell"></i>
                <i class="m-2 fa-2x far fa-bell"></i>
                <i class="m-2 fa-2x fas fa-bell-slash"></i>
                <i class="m-2 fa-2x far fa-bell-slash"></i>
                <i class="m-2 fa-2x fas fa-bezier-curve"></i>
                <i class="m-2 fa-2x fas fa-bicycle"></i>
                <i class="m-2 fa-2x fab fa-bimobject"></i>
                <i class="m-2 fa-2x fas fa-binoculars"></i>
                <i class="m-2 fa-2x fas fa-birthday-cake"></i>
                <i class="m-2 fa-2x fab fa-bitbucket"></i>
                <i class="m-2 fa-2x fab fa-bitcoin"></i>
                <i class="m-2 fa-2x fab fa-bity"></i>
                <i class="m-2 fa-2x fab fa-black-tie"></i>
                <i class="m-2 fa-2x fab fa-blackberry"></i>
                <i class="m-2 fa-2x fas fa-blender"></i>
                <i class="m-2 fa-2x fas fa-blind"></i>
                <i class="m-2 fa-2x fab fa-blogger"></i>
                <i class="m-2 fa-2x fab fa-blogger-b"></i>
                <i class="m-2 fa-2x fab fa-bluetooth"></i>
                <i class="m-2 fa-2x fab fa-bluetooth-b"></i>
                <i class="m-2 fa-2x fas fa-bold"></i>
                <i class="m-2 fa-2x fas fa-bolt"></i>
                <i class="m-2 fa-2x fas fa-bomb"></i>
                <i class="m-2 fa-2x fas fa-bone"></i>
                <i class="m-2 fa-2x fas fa-bong"></i>
                <i class="m-2 fa-2x fas fa-book"></i>
                <i class="m-2 fa-2x fas fa-book-open"></i>
                <i class="m-2 fa-2x fas fa-book-reader"></i>
                <i class="m-2 fa-2x fas fa-bookmark"></i>
                <i class="m-2 fa-2x far fa-bookmark"></i>
                <i class="m-2 fa-2x fas fa-bowling-ball"></i>
                <i class="m-2 fa-2x fas fa-box"></i>
                <i class="m-2 fa-2x fas fa-box-open"></i>
                <i class="m-2 fa-2x fas fa-boxes"></i>
                <i class="m-2 fa-2x fas fa-braille"></i>
                <i class="m-2 fa-2x fas fa-brain"></i>
                <i class="m-2 fa-2x fas fa-briefcase"></i>
                <i class="m-2 fa-2x fas fa-briefcase-medical"></i>
                <i class="m-2 fa-2x fas fa-broadcast-tower"></i>
                <i class="m-2 fa-2x fas fa-broom"></i>
                <i class="m-2 fa-2x fas fa-brush"></i>
                <i class="m-2 fa-2x fab fa-btc"></i>
                <i class="m-2 fa-2x fas fa-bug"></i>
                <i class="m-2 fa-2x fas fa-building"></i>
                <i class="m-2 fa-2x far fa-building"></i>
                <i class="m-2 fa-2x fas fa-bullhorn"></i>
                <i class="m-2 fa-2x fas fa-bullseye"></i>
                <i class="m-2 fa-2x fas fa-burn"></i>
                <i class="m-2 fa-2x fab fa-buromobelexperte"></i>
                <i class="m-2 fa-2x fas fa-bus"></i>
                <i class="m-2 fa-2x fas fa-bus-alt"></i>
                <i class="m-2 fa-2x fab fa-buysellads"></i>
                <i class="m-2 fa-2x fas fa-calculator"></i>
                <i class="m-2 fa-2x fas fa-calendar"></i>
                <i class="m-2 fa-2x far fa-calendar"></i>
                <i class="m-2 fa-2x fas fa-calendar-alt"></i>
                <i class="m-2 fa-2x far fa-calendar-alt"></i>
                <i class="m-2 fa-2x fas fa-calendar-check"></i>
                <i class="m-2 fa-2x far fa-calendar-check"></i>
                <i class="m-2 fa-2x fas fa-calendar-minus"></i>
                <i class="m-2 fa-2x far fa-calendar-minus"></i>
                <i class="m-2 fa-2x fas fa-calendar-plus"></i>
                <i class="m-2 fa-2x far fa-calendar-plus"></i>
                <i class="m-2 fa-2x fas fa-calendar-times"></i>
                <i class="m-2 fa-2x far fa-calendar-times"></i>
                <i class="m-2 fa-2x fas fa-camera"></i>
                <i class="m-2 fa-2x fas fa-camera-retro"></i>
                <i class="m-2 fa-2x fas fa-cannabis"></i>
                <i class="m-2 fa-2x fas fa-capsules"></i>
                <i class="m-2 fa-2x fas fa-car"></i>
                <i class="m-2 fa-2x fas fa-car-alt"></i>
                <i class="m-2 fa-2x fas fa-car-battery"></i>
                <i class="m-2 fa-2x fas fa-car-crash"></i>
                <i class="m-2 fa-2x fas fa-car-side"></i>
                <i class="m-2 fa-2x fas fa-caret-down"></i>
                <i class="m-2 fa-2x fas fa-caret-left"></i>
                <i class="m-2 fa-2x fas fa-caret-right"></i>
                <i class="m-2 fa-2x fas fa-caret-square-down"></i>
                <i class="m-2 fa-2x far fa-caret-square-down"></i>
                <i class="m-2 fa-2x fas fa-caret-square-left"></i>
                <i class="m-2 fa-2x far fa-caret-square-left"></i>
                <i class="m-2 fa-2x fas fa-caret-square-right"></i>
                <i class="m-2 fa-2x far fa-caret-square-right"></i>
                <i class="m-2 fa-2x fas fa-caret-square-up"></i>
                <i class="m-2 fa-2x far fa-caret-square-up"></i>
                <i class="m-2 fa-2x fas fa-caret-up"></i>
                <i class="m-2 fa-2x fas fa-cart-arrow-down"></i>
                <i class="m-2 fa-2x fas fa-cart-plus"></i>
                <i class="m-2 fa-2x fab fa-cc-amazon-pay"></i>
                <i class="m-2 fa-2x fab fa-cc-amex"></i>
                <i class="m-2 fa-2x fab fa-cc-apple-pay"></i>
                <i class="m-2 fa-2x fab fa-cc-diners-club"></i>
                <i class="m-2 fa-2x fab fa-cc-discover"></i>
                <i class="m-2 fa-2x fab fa-cc-jcb"></i>
                <i class="m-2 fa-2x fab fa-cc-mastercard"></i>
                <i class="m-2 fa-2x fab fa-cc-paypal"></i>
                <i class="m-2 fa-2x fab fa-cc-stripe"></i>
                <i class="m-2 fa-2x fab fa-cc-visa"></i>
                <i class="m-2 fa-2x fab fa-centercode"></i>
                <i class="m-2 fa-2x fas fa-certificate"></i>
                <i class="m-2 fa-2x fas fa-chalkboard"></i>
                <i class="m-2 fa-2x fas fa-chalkboard-teacher"></i>
                <i class="m-2 fa-2x fas fa-charging-station"></i>
                <i class="m-2 fa-2x fas fa-chart-area"></i>
                <i class="m-2 fa-2x fas fa-chart-bar"></i>
                <i class="m-2 fa-2x far fa-chart-bar"></i>
                <i class="m-2 fa-2x fas fa-chart-line"></i>
                <i class="m-2 fa-2x fas fa-chart-pie"></i>
                <i class="m-2 fa-2x fas fa-check"></i>
                <i class="m-2 fa-2x fas fa-check-circle"></i>
                <i class="m-2 fa-2x far fa-check-circle"></i>
                <i class="m-2 fa-2x fas fa-check-double"></i>
                <i class="m-2 fa-2x fas fa-check-square"></i>
                <i class="m-2 fa-2x far fa-check-square"></i>
                <i class="m-2 fa-2x fas fa-chess"></i>
                <i class="m-2 fa-2x fas fa-chess-bishop"></i>
                <i class="m-2 fa-2x fas fa-chess-board"></i>
                <i class="m-2 fa-2x fas fa-chess-king"></i>
                <i class="m-2 fa-2x fas fa-chess-knight"></i>
                <i class="m-2 fa-2x fas fa-chess-pawn"></i>
                <i class="m-2 fa-2x fas fa-chess-queen"></i>
                <i class="m-2 fa-2x fas fa-chess-rook"></i>
                <i class="m-2 fa-2x fas fa-chevron-circle-down"></i>
                <i class="m-2 fa-2x fas fa-chevron-circle-left"></i>
                <i class="m-2 fa-2x fas fa-chevron-circle-right"></i>
                <i class="m-2 fa-2x fas fa-chevron-circle-up"></i>
                <i class="m-2 fa-2x fas fa-chevron-down"></i>
                <i class="m-2 fa-2x fas fa-chevron-left"></i>
                <i class="m-2 fa-2x fas fa-chevron-right"></i>
                <i class="m-2 fa-2x fas fa-chevron-up"></i>
                <i class="m-2 fa-2x fas fa-child"></i>
                <i class="m-2 fa-2x fab fa-chrome"></i>
                <i class="m-2 fa-2x fas fa-church"></i>
                <i class="m-2 fa-2x fas fa-circle"></i>
                <i class="m-2 fa-2x far fa-circle"></i>
                <i class="m-2 fa-2x fas fa-circle-notch"></i>
                <i class="m-2 fa-2x fas fa-clipboard"></i>
                <i class="m-2 fa-2x far fa-clipboard"></i>
                <i class="m-2 fa-2x fas fa-clipboard-check"></i>
                <i class="m-2 fa-2x fas fa-clipboard-list"></i>
                <i class="m-2 fa-2x fas fa-clock"></i>
                <i class="m-2 fa-2x far fa-clock"></i>
                <i class="m-2 fa-2x fas fa-clone"></i>
                <i class="m-2 fa-2x far fa-clone"></i>
                <i class="m-2 fa-2x fas fa-closed-captioning"></i>
                <i class="m-2 fa-2x far fa-closed-captioning"></i>
                <i class="m-2 fa-2x fas fa-cloud"></i>
                <i class="m-2 fa-2x fas fa-cloud-download-alt"></i>
                <i class="m-2 fa-2x fas fa-cloud-upload-alt"></i>
                <i class="m-2 fa-2x fab fa-cloudscale"></i>
                <i class="m-2 fa-2x fab fa-cloudsmith"></i>
                <i class="m-2 fa-2x fab fa-cloudversify"></i>
                <i class="m-2 fa-2x fas fa-cocktail"></i>
                <i class="m-2 fa-2x fas fa-code"></i>
                <i class="m-2 fa-2x fas fa-code-branch"></i>
                <i class="m-2 fa-2x fab fa-codepen"></i>
                <i class="m-2 fa-2x fab fa-codiepie"></i>
                <i class="m-2 fa-2x fas fa-coffee"></i>
                <i class="m-2 fa-2x fas fa-cog"></i>
                <i class="m-2 fa-2x fas fa-cogs"></i>
                <i class="m-2 fa-2x fas fa-coins"></i>
                <i class="m-2 fa-2x fas fa-columns"></i>
                <i class="m-2 fa-2x fas fa-comment"></i>
                <i class="m-2 fa-2x far fa-comment"></i>
                <i class="m-2 fa-2x fas fa-comment-alt"></i>
                <i class="m-2 fa-2x far fa-comment-alt"></i>
                <i class="m-2 fa-2x fas fa-comment-dots"></i>
                <i class="m-2 fa-2x far fa-comment-dots"></i>
                <i class="m-2 fa-2x fas fa-comment-slash"></i>
                <i class="m-2 fa-2x fas fa-comments"></i>
                <i class="m-2 fa-2x far fa-comments"></i>
                <i class="m-2 fa-2x fas fa-compact-disc"></i>
                <i class="m-2 fa-2x fas fa-compass"></i>
                <i class="m-2 fa-2x far fa-compass"></i>
                <i class="m-2 fa-2x fas fa-compress"></i>
                <i class="m-2 fa-2x fas fa-concierge-bell"></i>
                <i class="m-2 fa-2x fab fa-connectdevelop"></i>
                <i class="m-2 fa-2x fab fa-contao"></i>
                <i class="m-2 fa-2x fas fa-cookie"></i>
                <i class="m-2 fa-2x fas fa-cookie-bite"></i>
                <i class="m-2 fa-2x fas fa-copy"></i>
                <i class="m-2 fa-2x far fa-copy"></i>
                <i class="m-2 fa-2x fas fa-copyright"></i>
                <i class="m-2 fa-2x far fa-copyright"></i>
                <i class="m-2 fa-2x fas fa-couch"></i>
                <i class="m-2 fa-2x fab fa-cpanel"></i>
                <i class="m-2 fa-2x fab fa-creative-commons"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-by"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-nc"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-nc-eu"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-nc-jp"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-nd"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-pd"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-pd-alt"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-remix"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-sa"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-sampling"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-sampling-plus"></i>
                <i class="m-2 fa-2x fab fa-creative-commons-share"></i>
                <i class="m-2 fa-2x fas fa-credit-card"></i>
                <i class="m-2 fa-2x far fa-credit-card"></i>
                <i class="m-2 fa-2x fas fa-crop"></i>
                <i class="m-2 fa-2x fas fa-crop-alt"></i>
                <i class="m-2 fa-2x fas fa-crosshairs"></i>
                <i class="m-2 fa-2x fas fa-crow"></i>
                <i class="m-2 fa-2x fas fa-crown"></i>
                <i class="m-2 fa-2x fab fa-css3"></i>
                <i class="m-2 fa-2x fab fa-css3-alt"></i>
                <i class="m-2 fa-2x fas fa-cube"></i>
                <i class="m-2 fa-2x fas fa-cubes"></i>
                <i class="m-2 fa-2x fas fa-cut"></i>
                <i class="m-2 fa-2x fab fa-cuttlefish"></i>
                <i class="m-2 fa-2x fab fa-d-and-d"></i>
                <i class="m-2 fa-2x fab fa-dashcube"></i>
                <i class="m-2 fa-2x fas fa-database"></i>
                <i class="m-2 fa-2x fas fa-deaf"></i>
                <i class="m-2 fa-2x fab fa-delicious"></i>
                <i class="m-2 fa-2x fab fa-deploydog"></i>
                <i class="m-2 fa-2x fab fa-deskpro"></i>
                <i class="m-2 fa-2x fas fa-desktop"></i>
                <i class="m-2 fa-2x fab fa-deviantart"></i>
                <i class="m-2 fa-2x fas fa-diagnoses"></i>
                <i class="m-2 fa-2x fas fa-dice"></i>
                <i class="m-2 fa-2x fas fa-dice-five"></i>
                <i class="m-2 fa-2x fas fa-dice-four"></i>
                <i class="m-2 fa-2x fas fa-dice-one"></i>
                <i class="m-2 fa-2x fas fa-dice-six"></i>
                <i class="m-2 fa-2x fas fa-dice-three"></i>
                <i class="m-2 fa-2x fas fa-dice-two"></i>
                <i class="m-2 fa-2x fab fa-digg"></i>
                <i class="m-2 fa-2x fab fa-digital-ocean"></i>
                <i class="m-2 fa-2x fas fa-digital-tachograph"></i>
                <i class="m-2 fa-2x fas fa-directions"></i>
                <i class="m-2 fa-2x fab fa-discord"></i>
                <i class="m-2 fa-2x fab fa-discourse"></i>
                <i class="m-2 fa-2x fas fa-divide"></i>
                <i class="m-2 fa-2x fas fa-dizzy"></i>
                <i class="m-2 fa-2x far fa-dizzy"></i>
                <i class="m-2 fa-2x fas fa-dna"></i>
                <i class="m-2 fa-2x fab fa-dochub"></i>
                <i class="m-2 fa-2x fab fa-docker"></i>
                <i class="m-2 fa-2x fas fa-dollar-sign"></i>
                <i class="m-2 fa-2x fas fa-dolly"></i>
                <i class="m-2 fa-2x fas fa-dolly-flatbed"></i>
                <i class="m-2 fa-2x fas fa-donate"></i>
                <i class="m-2 fa-2x fas fa-door-closed"></i>
                <i class="m-2 fa-2x fas fa-door-open"></i>
                <i class="m-2 fa-2x fas fa-dot-circle"></i>
                <i class="m-2 fa-2x far fa-dot-circle"></i>
                <i class="m-2 fa-2x fas fa-dove"></i>
                <i class="m-2 fa-2x fas fa-download"></i>
                <i class="m-2 fa-2x fab fa-draft2digital"></i>
                <i class="m-2 fa-2x fas fa-drafting-compass"></i>
                <i class="m-2 fa-2x fas fa-draw-polygon"></i>
                <i class="m-2 fa-2x fab fa-dribbble"></i>
                <i class="m-2 fa-2x fab fa-dribbble-square"></i>
                <i class="m-2 fa-2x fab fa-dropbox"></i>
                <i class="m-2 fa-2x fas fa-drum"></i>
                <i class="m-2 fa-2x fas fa-drum-steelpan"></i>
                <i class="m-2 fa-2x fab fa-drupal"></i>
                <i class="m-2 fa-2x fas fa-dumbbell"></i>
                <i class="m-2 fa-2x fab fa-dyalog"></i>
                <i class="m-2 fa-2x fab fa-earlybirds"></i>
                <i class="m-2 fa-2x fab fa-ebay"></i>
                <i class="m-2 fa-2x fab fa-edge"></i>
                <i class="m-2 fa-2x fas fa-edit"></i>
                <i class="m-2 fa-2x far fa-edit"></i>
                <i class="m-2 fa-2x fas fa-eject"></i>
                <i class="m-2 fa-2x fab fa-elementor"></i>
                <i class="m-2 fa-2x fas fa-ellipsis-h"></i>
                <i class="m-2 fa-2x fas fa-ellipsis-v"></i>
                <i class="m-2 fa-2x fab fa-ello"></i>
                <i class="m-2 fa-2x fab fa-ember"></i>
                <i class="m-2 fa-2x fab fa-empire"></i>
                <i class="m-2 fa-2x fas fa-envelope"></i>
                <i class="m-2 fa-2x far fa-envelope"></i>
                <i class="m-2 fa-2x fas fa-envelope-open"></i>
                <i class="m-2 fa-2x far fa-envelope-open"></i>
                <i class="m-2 fa-2x fas fa-envelope-square"></i>
                <i class="m-2 fa-2x fab fa-envira"></i>
                <i class="m-2 fa-2x fas fa-equals"></i>
                <i class="m-2 fa-2x fas fa-eraser"></i>
                <i class="m-2 fa-2x fab fa-erlang"></i>
                <i class="m-2 fa-2x fab fa-ethereum"></i>
                <i class="m-2 fa-2x fab fa-etsy"></i>
                <i class="m-2 fa-2x fas fa-euro-sign"></i>
                <i class="m-2 fa-2x fas fa-exchange-alt"></i>
                <i class="m-2 fa-2x fas fa-exclamation"></i>
                <i class="m-2 fa-2x fas fa-exclamation-circle"></i>
                <i class="m-2 fa-2x fas fa-exclamation-triangle"></i>
                <i class="m-2 fa-2x fas fa-expand"></i>
                <i class="m-2 fa-2x fas fa-expand-arrows-alt"></i>
                <i class="m-2 fa-2x fab fa-expeditedssl"></i>
                <i class="m-2 fa-2x fas fa-external-link-alt"></i>
                <i class="m-2 fa-2x fas fa-external-link-square-alt"></i>
                <i class="m-2 fa-2x fas fa-eye"></i>
                <i class="m-2 fa-2x far fa-eye"></i>
                <i class="m-2 fa-2x fas fa-eye-dropper"></i>
                <i class="m-2 fa-2x fas fa-eye-slash"></i>
                <i class="m-2 fa-2x far fa-eye-slash"></i>
                <i class="m-2 fa-2x fab fa-facebook"></i>
                <i class="m-2 fa-2x fab fa-facebook-f"></i>
                <i class="m-2 fa-2x fab fa-facebook-messenger"></i>
                <i class="m-2 fa-2x fab fa-facebook-square"></i>
                <i class="m-2 fa-2x fas fa-fast-backward"></i>
                <i class="m-2 fa-2x fas fa-fast-forward"></i>
                <i class="m-2 fa-2x fas fa-fax"></i>
                <i class="m-2 fa-2x fas fa-feather"></i>
                <i class="m-2 fa-2x fas fa-feather-alt"></i>
                <i class="m-2 fa-2x fas fa-female"></i>
                <i class="m-2 fa-2x fas fa-fighter-jet"></i>
                <i class="m-2 fa-2x fas fa-file"></i>
                <i class="m-2 fa-2x far fa-file"></i>
                <i class="m-2 fa-2x fas fa-file-alt"></i>
                <i class="m-2 fa-2x far fa-file-alt"></i>
                <i class="m-2 fa-2x fas fa-file-archive"></i>
                <i class="m-2 fa-2x far fa-file-archive"></i>
                <i class="m-2 fa-2x fas fa-file-audio"></i>
                <i class="m-2 fa-2x far fa-file-audio"></i>
                <i class="m-2 fa-2x fas fa-file-code"></i>
                <i class="m-2 fa-2x far fa-file-code"></i>
                <i class="m-2 fa-2x fas fa-file-contract"></i>
                <i class="m-2 fa-2x fas fa-file-download"></i>
                <i class="m-2 fa-2x fas fa-file-excel"></i>
                <i class="m-2 fa-2x far fa-file-excel"></i>
                <i class="m-2 fa-2x fas fa-file-export"></i>
                <i class="m-2 fa-2x fas fa-file-image"></i>
                <i class="m-2 fa-2x far fa-file-image"></i>
                <i class="m-2 fa-2x fas fa-file-import"></i>
                <i class="m-2 fa-2x fas fa-file-invoice"></i>
                <i class="m-2 fa-2x fas fa-file-invoice-dollar"></i>
                <i class="m-2 fa-2x fas fa-file-medical"></i>
                <i class="m-2 fa-2x fas fa-file-medical-alt"></i>
                <i class="m-2 fa-2x fas fa-file-pdf"></i>
                <i class="m-2 fa-2x far fa-file-pdf"></i>
                <i class="m-2 fa-2x fas fa-file-powerpoint"></i>
                <i class="m-2 fa-2x far fa-file-powerpoint"></i>
                <i class="m-2 fa-2x fas fa-file-prescription"></i>
                <i class="m-2 fa-2x fas fa-file-signature"></i>
                <i class="m-2 fa-2x fas fa-file-upload"></i>
                <i class="m-2 fa-2x fas fa-file-video"></i>
                <i class="m-2 fa-2x far fa-file-video"></i>
                <i class="m-2 fa-2x fas fa-file-word"></i>
                <i class="m-2 fa-2x far fa-file-word"></i>
                <i class="m-2 fa-2x fas fa-fill"></i>
                <i class="m-2 fa-2x fas fa-fill-drip"></i>
                <i class="m-2 fa-2x fas fa-film"></i>
                <i class="m-2 fa-2x fas fa-filter"></i>
                <i class="m-2 fa-2x fas fa-fingerprint"></i>
                <i class="m-2 fa-2x fas fa-fire"></i>
                <i class="m-2 fa-2x fas fa-fire-extinguisher"></i>
                <i class="m-2 fa-2x fab fa-firefox"></i>
                <i class="m-2 fa-2x fas fa-first-aid"></i>
                <i class="m-2 fa-2x fab fa-first-order"></i>
                <i class="m-2 fa-2x fab fa-first-order-alt"></i>
                <i class="m-2 fa-2x fab fa-firstdraft"></i>
                <i class="m-2 fa-2x fas fa-fish"></i>
                <i class="m-2 fa-2x fas fa-flag"></i>
                <i class="m-2 fa-2x far fa-flag"></i>
                <i class="m-2 fa-2x fas fa-flag-checkered"></i>
                <i class="m-2 fa-2x fas fa-flask"></i>
                <i class="m-2 fa-2x fab fa-flickr"></i>
                <i class="m-2 fa-2x fab fa-flipboard"></i>
                <i class="m-2 fa-2x fas fa-flushed"></i>
                <i class="m-2 fa-2x far fa-flushed"></i>
                <i class="m-2 fa-2x fab fa-fly"></i>
                <i class="m-2 fa-2x fas fa-folder"></i>
                <i class="m-2 fa-2x far fa-folder"></i>
                <i class="m-2 fa-2x fas fa-folder-open"></i>
                <i class="m-2 fa-2x far fa-folder-open"></i>
                <i class="m-2 fa-2x fas fa-font"></i>
                <i class="m-2 fa-2x fab fa-font-awesome"></i>
                <i class="m-2 fa-2x fab fa-font-awesome-alt"></i>
                <i class="m-2 fa-2x fab fa-font-awesome-flag"></i>
                <i class="m-2 fa-2x fab fa-fonticons"></i>
                <i class="m-2 fa-2x fab fa-fonticons-fi"></i>
                <i class="m-2 fa-2x fas fa-football-ball"></i>
                <i class="m-2 fa-2x fab fa-fort-awesome"></i>
                <i class="m-2 fa-2x fab fa-fort-awesome-alt"></i>
                <i class="m-2 fa-2x fab fa-forumbee"></i>
                <i class="m-2 fa-2x fas fa-forward"></i>
                <i class="m-2 fa-2x fab fa-foursquare"></i>
                <i class="m-2 fa-2x fab fa-free-code-camp"></i>
                <i class="m-2 fa-2x fab fa-freebsd"></i>
                <i class="m-2 fa-2x fas fa-frog"></i>
                <i class="m-2 fa-2x fas fa-frown"></i>
                <i class="m-2 fa-2x far fa-frown"></i>
                <i class="m-2 fa-2x fas fa-frown-open"></i>
                <i class="m-2 fa-2x far fa-frown-open"></i>
                <i class="m-2 fa-2x fab fa-fulcrum"></i>
                <i class="m-2 fa-2x fas fa-futbol"></i>
                <i class="m-2 fa-2x far fa-futbol"></i>
                <i class="m-2 fa-2x fab fa-galactic-republic"></i>
                <i class="m-2 fa-2x fab fa-galactic-senate"></i>
                <i class="m-2 fa-2x fas fa-gamepad"></i>
                <i class="m-2 fa-2x fas fa-gas-pump"></i>
                <i class="m-2 fa-2x fas fa-gavel"></i>
                <i class="m-2 fa-2x fas fa-gem"></i>
                <i class="m-2 fa-2x far fa-gem"></i>
                <i class="m-2 fa-2x fas fa-genderless"></i>
                <i class="m-2 fa-2x fab fa-get-pocket"></i>
                <i class="m-2 fa-2x fab fa-gg"></i>
                <i class="m-2 fa-2x fab fa-gg-circle"></i>
                <i class="m-2 fa-2x fas fa-gift"></i>
                <i class="m-2 fa-2x fab fa-git"></i>
                <i class="m-2 fa-2x fab fa-git-square"></i>
                <i class="m-2 fa-2x fab fa-github"></i>
                <i class="m-2 fa-2x fab fa-github-alt"></i>
                <i class="m-2 fa-2x fab fa-github-square"></i>
                <i class="m-2 fa-2x fab fa-gitkraken"></i>
                <i class="m-2 fa-2x fab fa-gitlab"></i>
                <i class="m-2 fa-2x fab fa-gitter"></i>
                <i class="m-2 fa-2x fas fa-glass-martini"></i>
                <i class="m-2 fa-2x fas fa-glass-martini-alt"></i>
                <i class="m-2 fa-2x fas fa-glasses"></i>
                <i class="m-2 fa-2x fab fa-glide"></i>
                <i class="m-2 fa-2x fab fa-glide-g"></i>
                <i class="m-2 fa-2x fas fa-globe"></i>
                <i class="m-2 fa-2x fas fa-globe-africa"></i>
                <i class="m-2 fa-2x fas fa-globe-americas"></i>
                <i class="m-2 fa-2x fas fa-globe-asia"></i>
                <i class="m-2 fa-2x fab fa-gofore"></i>
                <i class="m-2 fa-2x fas fa-golf-ball"></i>
                <i class="m-2 fa-2x fab fa-goodreads"></i>
                <i class="m-2 fa-2x fab fa-goodreads-g"></i>
                <i class="m-2 fa-2x fab fa-google"></i>
                <i class="m-2 fa-2x fab fa-google-drive"></i>
                <i class="m-2 fa-2x fab fa-google-play"></i>
                <i class="m-2 fa-2x fab fa-google-plus"></i>
                <i class="m-2 fa-2x fab fa-google-plus-g"></i>
                <i class="m-2 fa-2x fab fa-google-plus-square"></i>
                <i class="m-2 fa-2x fab fa-google-wallet"></i>
                <i class="m-2 fa-2x fas fa-graduation-cap"></i>
                <i class="m-2 fa-2x fab fa-gratipay"></i>
                <i class="m-2 fa-2x fab fa-grav"></i>
                <i class="m-2 fa-2x fas fa-greater-than"></i>
                <i class="m-2 fa-2x fas fa-greater-than-equal"></i>
                <i class="m-2 fa-2x fas fa-grimace"></i>
                <i class="m-2 fa-2x far fa-grimace"></i>
                <i class="m-2 fa-2x fas fa-grin"></i>
                <i class="m-2 fa-2x far fa-grin"></i>
                <i class="m-2 fa-2x fas fa-grin-alt"></i>
                <i class="m-2 fa-2x far fa-grin-alt"></i>
                <i class="m-2 fa-2x fas fa-grin-beam"></i>
                <i class="m-2 fa-2x far fa-grin-beam"></i>
                <i class="m-2 fa-2x fas fa-grin-beam-sweat"></i>
                <i class="m-2 fa-2x far fa-grin-beam-sweat"></i>
                <i class="m-2 fa-2x fas fa-grin-hearts"></i>
                <i class="m-2 fa-2x far fa-grin-hearts"></i>
                <i class="m-2 fa-2x fas fa-grin-squint"></i>
                <i class="m-2 fa-2x far fa-grin-squint"></i>
                <i class="m-2 fa-2x fas fa-grin-squint-tears"></i>
                <i class="m-2 fa-2x far fa-grin-squint-tears"></i>
                <i class="m-2 fa-2x fas fa-grin-stars"></i>
                <i class="m-2 fa-2x far fa-grin-stars"></i>
                <i class="m-2 fa-2x fas fa-grin-tears"></i>
                <i class="m-2 fa-2x far fa-grin-tears"></i>
                <i class="m-2 fa-2x fas fa-grin-tongue"></i>
                <i class="m-2 fa-2x far fa-grin-tongue"></i>
                <i class="m-2 fa-2x fas fa-grin-tongue-squint"></i>
                <i class="m-2 fa-2x far fa-grin-tongue-squint"></i>
                <i class="m-2 fa-2x fas fa-grin-tongue-wink"></i>
                <i class="m-2 fa-2x far fa-grin-tongue-wink"></i>
                <i class="m-2 fa-2x fas fa-grin-wink"></i>
                <i class="m-2 fa-2x far fa-grin-wink"></i>
                <i class="m-2 fa-2x fas fa-grip-horizontal"></i>
                <i class="m-2 fa-2x fas fa-grip-vertical"></i>
                <i class="m-2 fa-2x fab fa-gripfire"></i>
                <i class="m-2 fa-2x fab fa-grunt"></i>
                <i class="m-2 fa-2x fab fa-gulp"></i>
                <i class="m-2 fa-2x fas fa-h-square"></i>
                <i class="m-2 fa-2x fab fa-hacker-news"></i>
                <i class="m-2 fa-2x fab fa-hacker-news-square"></i>
                <i class="m-2 fa-2x fab fa-hackerrank"></i>
                <i class="m-2 fa-2x fas fa-hand-holding"></i>
                <i class="m-2 fa-2x fas fa-hand-holding-heart"></i>
                <i class="m-2 fa-2x fas fa-hand-holding-usd"></i>
                <i class="m-2 fa-2x fas fa-hand-lizard"></i>
                <i class="m-2 fa-2x far fa-hand-lizard"></i>
                <i class="m-2 fa-2x fas fa-hand-paper"></i>
                <i class="m-2 fa-2x far fa-hand-paper"></i>
                <i class="m-2 fa-2x fas fa-hand-peace"></i>
                <i class="m-2 fa-2x far fa-hand-peace"></i>
                <i class="m-2 fa-2x fas fa-hand-point-down"></i>
                <i class="m-2 fa-2x far fa-hand-point-down"></i>
                <i class="m-2 fa-2x fas fa-hand-point-left"></i>
                <i class="m-2 fa-2x far fa-hand-point-left"></i>
                <i class="m-2 fa-2x fas fa-hand-point-right"></i>
                <i class="m-2 fa-2x far fa-hand-point-right"></i>
                <i class="m-2 fa-2x fas fa-hand-point-up"></i>
                <i class="m-2 fa-2x far fa-hand-point-up"></i>
                <i class="m-2 fa-2x fas fa-hand-pointer"></i>
                <i class="m-2 fa-2x far fa-hand-pointer"></i>
                <i class="m-2 fa-2x fas fa-hand-rock"></i>
                <i class="m-2 fa-2x far fa-hand-rock"></i>
                <i class="m-2 fa-2x fas fa-hand-scissors"></i>
                <i class="m-2 fa-2x far fa-hand-scissors"></i>
                <i class="m-2 fa-2x fas fa-hand-spock"></i>
                <i class="m-2 fa-2x far fa-hand-spock"></i>
                <i class="m-2 fa-2x fas fa-hands"></i>
                <i class="m-2 fa-2x fas fa-hands-helping"></i>
                <i class="m-2 fa-2x fas fa-handshake"></i>
                <i class="m-2 fa-2x far fa-handshake"></i>
                <i class="m-2 fa-2x fas fa-hashtag"></i>
                <i class="m-2 fa-2x fas fa-hdd"></i>
                <i class="m-2 fa-2x far fa-hdd"></i>
                <i class="m-2 fa-2x fas fa-heading"></i>
                <i class="m-2 fa-2x fas fa-headphones"></i>
                <i class="m-2 fa-2x fas fa-headphones-alt"></i>
                <i class="m-2 fa-2x fas fa-headset"></i>
                <i class="m-2 fa-2x fas fa-heart"></i>
                <i class="m-2 fa-2x far fa-heart"></i>
                <i class="m-2 fa-2x fas fa-heartbeat"></i>
                <i class="m-2 fa-2x fas fa-helicopter"></i>
                <i class="m-2 fa-2x fas fa-highlighter"></i>
                <i class="m-2 fa-2x fab fa-hips"></i>
                <i class="m-2 fa-2x fab fa-hire-a-helper"></i>
                <i class="m-2 fa-2x fas fa-history"></i>
                <i class="m-2 fa-2x fas fa-hockey-puck"></i>
                <i class="m-2 fa-2x fas fa-home"></i>
                <i class="m-2 fa-2x fab fa-hooli"></i>
                <i class="m-2 fa-2x fab fa-hornbill"></i>
                <i class="m-2 fa-2x fas fa-hospital"></i>
                <i class="m-2 fa-2x far fa-hospital"></i>
                <i class="m-2 fa-2x fas fa-hospital-alt"></i>
                <i class="m-2 fa-2x fas fa-hospital-symbol"></i>
                <i class="m-2 fa-2x fas fa-hot-tub"></i>
                <i class="m-2 fa-2x fas fa-hotel"></i>
                <i class="m-2 fa-2x fab fa-hotjar"></i>
                <i class="m-2 fa-2x fas fa-hourglass"></i>
                <i class="m-2 fa-2x far fa-hourglass"></i>
                <i class="m-2 fa-2x fas fa-hourglass-end"></i>
                <i class="m-2 fa-2x fas fa-hourglass-half"></i>
                <i class="m-2 fa-2x fas fa-hourglass-start"></i>
                <i class="m-2 fa-2x fab fa-houzz"></i>
                <i class="m-2 fa-2x fab fa-html5"></i>
                <i class="m-2 fa-2x fab fa-hubspot"></i>
                <i class="m-2 fa-2x fas fa-i-cursor"></i>
                <i class="m-2 fa-2x fas fa-id-badge"></i>
                <i class="m-2 fa-2x far fa-id-badge"></i>
                <i class="m-2 fa-2x fas fa-id-card"></i>
                <i class="m-2 fa-2x far fa-id-card"></i>
                <i class="m-2 fa-2x fas fa-id-card-alt"></i>
                <i class="m-2 fa-2x fas fa-image"></i>
                <i class="m-2 fa-2x far fa-image"></i>
                <i class="m-2 fa-2x fas fa-images"></i>
                <i class="m-2 fa-2x far fa-images"></i>
                <i class="m-2 fa-2x fab fa-imdb"></i>
                <i class="m-2 fa-2x fas fa-inbox"></i>
                <i class="m-2 fa-2x fas fa-indent"></i>
                <i class="m-2 fa-2x fas fa-industry"></i>
                <i class="m-2 fa-2x fas fa-infinity"></i>
                <i class="m-2 fa-2x fas fa-info"></i>
                <i class="m-2 fa-2x fas fa-info-circle"></i>
                <i class="m-2 fa-2x fab fa-instagram"></i>
                <i class="m-2 fa-2x fab fa-internet-explorer"></i>
                <i class="m-2 fa-2x fab fa-ioxhost"></i>
                <i class="m-2 fa-2x fas fa-italic"></i>
                <i class="m-2 fa-2x fab fa-itunes"></i>
                <i class="m-2 fa-2x fab fa-itunes-note"></i>
                <i class="m-2 fa-2x fab fa-java"></i>
                <i class="m-2 fa-2x fab fa-jedi-order"></i>
                <i class="m-2 fa-2x fab fa-jenkins"></i>
                <i class="m-2 fa-2x fab fa-joget"></i>
                <i class="m-2 fa-2x fas fa-joint"></i>
                <i class="m-2 fa-2x fab fa-joomla"></i>
                <i class="m-2 fa-2x fab fa-js"></i>
                <i class="m-2 fa-2x fab fa-js-square"></i>
                <i class="m-2 fa-2x fab fa-jsfiddle"></i>
                <i class="m-2 fa-2x fab fa-kaggle"></i>
                <i class="m-2 fa-2x fas fa-key"></i>
                <i class="m-2 fa-2x fab fa-keybase"></i>
                <i class="m-2 fa-2x fas fa-keyboard"></i>
                <i class="m-2 fa-2x far fa-keyboard"></i>
                <i class="m-2 fa-2x fab fa-keycdn"></i>
                <i class="m-2 fa-2x fab fa-kickstarter"></i>
                <i class="m-2 fa-2x fab fa-kickstarter-k"></i>
                <i class="m-2 fa-2x fas fa-kiss"></i>
                <i class="m-2 fa-2x far fa-kiss"></i>
                <i class="m-2 fa-2x fas fa-kiss-beam"></i>
                <i class="m-2 fa-2x far fa-kiss-beam"></i>
                <i class="m-2 fa-2x fas fa-kiss-wink-heart"></i>
                <i class="m-2 fa-2x far fa-kiss-wink-heart"></i>
                <i class="m-2 fa-2x fas fa-kiwi-bird"></i>
                <i class="m-2 fa-2x fab fa-korvue"></i>
                <i class="m-2 fa-2x fas fa-language"></i>
                <i class="m-2 fa-2x fas fa-laptop"></i>
                <i class="m-2 fa-2x fas fa-laptop-code"></i>
                <i class="m-2 fa-2x fab fa-laravel"></i>
                <i class="m-2 fa-2x fab fa-lastfm"></i>
                <i class="m-2 fa-2x fab fa-lastfm-square"></i>
                <i class="m-2 fa-2x fas fa-laugh"></i>
                <i class="m-2 fa-2x far fa-laugh"></i>
                <i class="m-2 fa-2x fas fa-laugh-beam"></i>
                <i class="m-2 fa-2x far fa-laugh-beam"></i>
                <i class="m-2 fa-2x fas fa-laugh-squint"></i>
                <i class="m-2 fa-2x far fa-laugh-squint"></i>
                <i class="m-2 fa-2x fas fa-laugh-wink"></i>
                <i class="m-2 fa-2x far fa-laugh-wink"></i>
                <i class="m-2 fa-2x fas fa-layer-group"></i>
                <i class="m-2 fa-2x fas fa-leaf"></i>
                <i class="m-2 fa-2x fab fa-leanpub"></i>
                <i class="m-2 fa-2x fas fa-lemon"></i>
                <i class="m-2 fa-2x far fa-lemon"></i>
                <i class="m-2 fa-2x fab fa-less"></i>
                <i class="m-2 fa-2x fas fa-less-than"></i>
                <i class="m-2 fa-2x fas fa-less-than-equal"></i>
                <i class="m-2 fa-2x fas fa-level-down-alt"></i>
                <i class="m-2 fa-2x fas fa-level-up-alt"></i>
                <i class="m-2 fa-2x fas fa-life-ring"></i>
                <i class="m-2 fa-2x far fa-life-ring"></i>
                <i class="m-2 fa-2x fas fa-lightbulb"></i>
                <i class="m-2 fa-2x far fa-lightbulb"></i>
                <i class="m-2 fa-2x fab fa-line"></i>
                <i class="m-2 fa-2x fas fa-link"></i>
                <i class="m-2 fa-2x fab fa-linkedin"></i>
                <i class="m-2 fa-2x fab fa-linkedin-in"></i>
                <i class="m-2 fa-2x fab fa-linode"></i>
                <i class="m-2 fa-2x fab fa-linux"></i>
                <i class="m-2 fa-2x fas fa-lira-sign"></i>
                <i class="m-2 fa-2x fas fa-list"></i>
                <i class="m-2 fa-2x fas fa-list-alt"></i>
                <i class="m-2 fa-2x far fa-list-alt"></i>
                <i class="m-2 fa-2x fas fa-list-ol"></i>
                <i class="m-2 fa-2x fas fa-list-ul"></i>
                <i class="m-2 fa-2x fas fa-location-arrow"></i>
                <i class="m-2 fa-2x fas fa-lock"></i>
                <i class="m-2 fa-2x fas fa-lock-open"></i>
                <i class="m-2 fa-2x fas fa-long-arrow-alt-down"></i>
                <i class="m-2 fa-2x fas fa-long-arrow-alt-left"></i>
                <i class="m-2 fa-2x fas fa-long-arrow-alt-right"></i>
                <i class="m-2 fa-2x fas fa-long-arrow-alt-up"></i>
                <i class="m-2 fa-2x fas fa-low-vision"></i>
                <i class="m-2 fa-2x fas fa-luggage-cart"></i>
                <i class="m-2 fa-2x fab fa-lyft"></i>
                <i class="m-2 fa-2x fab fa-magento"></i>
                <i class="m-2 fa-2x fas fa-magic"></i>
                <i class="m-2 fa-2x fas fa-magnet"></i>
                <i class="m-2 fa-2x fab fa-mailchimp"></i>
                <i class="m-2 fa-2x fas fa-male"></i>
                <i class="m-2 fa-2x fab fa-mandalorian"></i>
                <i class="m-2 fa-2x fas fa-map"></i>
                <i class="m-2 fa-2x far fa-map"></i>
                <i class="m-2 fa-2x fas fa-map-marked"></i>
                <i class="m-2 fa-2x fas fa-map-marked-alt"></i>
                <i class="m-2 fa-2x fas fa-map-marker"></i>
                <i class="m-2 fa-2x fas fa-map-marker-alt"></i>
                <i class="m-2 fa-2x fas fa-map-pin"></i>
                <i class="m-2 fa-2x fas fa-map-signs"></i>
                <i class="m-2 fa-2x fab fa-markdown"></i>
                <i class="m-2 fa-2x fas fa-marker"></i>
                <i class="m-2 fa-2x fas fa-mars"></i>
                <i class="m-2 fa-2x fas fa-mars-double"></i>
                <i class="m-2 fa-2x fas fa-mars-stroke"></i>
                <i class="m-2 fa-2x fas fa-mars-stroke-h"></i>
                <i class="m-2 fa-2x fas fa-mars-stroke-v"></i>
                <i class="m-2 fa-2x fab fa-mastodon"></i>
                <i class="m-2 fa-2x fab fa-maxcdn"></i>
                <i class="m-2 fa-2x fas fa-medal"></i>
                <i class="m-2 fa-2x fab fa-medapps"></i>
                <i class="m-2 fa-2x fab fa-medium"></i>
                <i class="m-2 fa-2x fab fa-medium-m"></i>
                <i class="m-2 fa-2x fas fa-medkit"></i>
                <i class="m-2 fa-2x fab fa-medrt"></i>
                <i class="m-2 fa-2x fab fa-meetup"></i>
                <i class="m-2 fa-2x fab fa-megaport"></i>
                <i class="m-2 fa-2x fas fa-meh"></i>
                <i class="m-2 fa-2x far fa-meh"></i>
                <i class="m-2 fa-2x fas fa-meh-blank"></i>
                <i class="m-2 fa-2x far fa-meh-blank"></i>
                <i class="m-2 fa-2x fas fa-meh-rolling-eyes"></i>
                <i class="m-2 fa-2x far fa-meh-rolling-eyes"></i>
                <i class="m-2 fa-2x fas fa-memory"></i>
                <i class="m-2 fa-2x fas fa-mercury"></i>
                <i class="m-2 fa-2x fas fa-microchip"></i>
                <i class="m-2 fa-2x fas fa-microphone"></i>
                <i class="m-2 fa-2x fas fa-microphone-alt"></i>
                <i class="m-2 fa-2x fas fa-microphone-alt-slash"></i>
                <i class="m-2 fa-2x fas fa-microphone-slash"></i>
                <i class="m-2 fa-2x fas fa-microscope"></i>
                <i class="m-2 fa-2x fab fa-microsoft"></i>
                <i class="m-2 fa-2x fas fa-minus"></i>
                <i class="m-2 fa-2x fas fa-minus-circle"></i>
                <i class="m-2 fa-2x fas fa-minus-square"></i>
                <i class="m-2 fa-2x far fa-minus-square"></i>
                <i class="m-2 fa-2x fab fa-mix"></i>
                <i class="m-2 fa-2x fab fa-mixcloud"></i>
                <i class="m-2 fa-2x fab fa-mizuni"></i>
                <i class="m-2 fa-2x fas fa-mobile"></i>
                <i class="m-2 fa-2x fas fa-mobile-alt"></i>
                <i class="m-2 fa-2x fab fa-modx"></i>
                <i class="m-2 fa-2x fab fa-monero"></i>
                <i class="m-2 fa-2x fas fa-money-bill"></i>
                <i class="m-2 fa-2x fas fa-money-bill-alt"></i>
                <i class="m-2 fa-2x far fa-money-bill-alt"></i>
                <i class="m-2 fa-2x fas fa-money-bill-wave"></i>
                <i class="m-2 fa-2x fas fa-money-bill-wave-alt"></i>
                <i class="m-2 fa-2x fas fa-money-check"></i>
                <i class="m-2 fa-2x fas fa-money-check-alt"></i>
                <i class="m-2 fa-2x fas fa-monument"></i>
                <i class="m-2 fa-2x fas fa-moon"></i>
                <i class="m-2 fa-2x far fa-moon"></i>
                <i class="m-2 fa-2x fas fa-mortar-pestle"></i>
                <i class="m-2 fa-2x fas fa-motorcycle"></i>
                <i class="m-2 fa-2x fas fa-mouse-pointer"></i>
                <i class="m-2 fa-2x fas fa-music"></i>
                <i class="m-2 fa-2x fab fa-napster"></i>
                <i class="m-2 fa-2x fab fa-neos"></i>
                <i class="m-2 fa-2x fas fa-neuter"></i>
                <i class="m-2 fa-2x fas fa-newspaper"></i>
                <i class="m-2 fa-2x far fa-newspaper"></i>
                <i class="m-2 fa-2x fab fa-nimblr"></i>
                <i class="m-2 fa-2x fab fa-nintendo-switch"></i>
                <i class="m-2 fa-2x fab fa-node"></i>
                <i class="m-2 fa-2x fab fa-node-js"></i>
                <i class="m-2 fa-2x fas fa-not-equal"></i>
                <i class="m-2 fa-2x fas fa-notes-medical"></i>
                <i class="m-2 fa-2x fab fa-npm"></i>
                <i class="m-2 fa-2x fab fa-ns8"></i>
                <i class="m-2 fa-2x fab fa-nutritionix"></i>
                <i class="m-2 fa-2x fas fa-object-group"></i>
                <i class="m-2 fa-2x far fa-object-group"></i>
                <i class="m-2 fa-2x fas fa-object-ungroup"></i>
                <i class="m-2 fa-2x far fa-object-ungroup"></i>
                <i class="m-2 fa-2x fab fa-odnoklassniki"></i>
                <i class="m-2 fa-2x fab fa-odnoklassniki-square"></i>
                <i class="m-2 fa-2x fas fa-oil-can"></i>
                <i class="m-2 fa-2x fab fa-old-republic"></i>
                <i class="m-2 fa-2x fab fa-opencart"></i>
                <i class="m-2 fa-2x fab fa-openid"></i>
                <i class="m-2 fa-2x fab fa-opera"></i>
                <i class="m-2 fa-2x fab fa-optin-monster"></i>
                <i class="m-2 fa-2x fab fa-osi"></i>
                <i class="m-2 fa-2x fas fa-outdent"></i>
                <i class="m-2 fa-2x fab fa-page4"></i>
                <i class="m-2 fa-2x fab fa-pagelines"></i>
                <i class="m-2 fa-2x fas fa-paint-brush"></i>
                <i class="m-2 fa-2x fas fa-paint-roller"></i>
                <i class="m-2 fa-2x fas fa-palette"></i>
                <i class="m-2 fa-2x fab fa-palfed"></i>
                <i class="m-2 fa-2x fas fa-pallet"></i>
                <i class="m-2 fa-2x fas fa-paper-plane"></i>
                <i class="m-2 fa-2x far fa-paper-plane"></i>
                <i class="m-2 fa-2x fas fa-paperclip"></i>
                <i class="m-2 fa-2x fas fa-parachute-box"></i>
                <i class="m-2 fa-2x fas fa-paragraph"></i>
                <i class="m-2 fa-2x fas fa-parking"></i>
                <i class="m-2 fa-2x fas fa-passport"></i>
                <i class="m-2 fa-2x fas fa-paste"></i>
                <i class="m-2 fa-2x fab fa-patreon"></i>
                <i class="m-2 fa-2x fas fa-pause"></i>
                <i class="m-2 fa-2x fas fa-pause-circle"></i>
                <i class="m-2 fa-2x far fa-pause-circle"></i>
                <i class="m-2 fa-2x fas fa-paw"></i>
                <i class="m-2 fa-2x fab fa-paypal"></i>
                <i class="m-2 fa-2x fas fa-pen"></i>
                <i class="m-2 fa-2x fas fa-pen-alt"></i>
                <i class="m-2 fa-2x fas fa-pen-fancy"></i>
                <i class="m-2 fa-2x fas fa-pen-nib"></i>
                <i class="m-2 fa-2x fas fa-pen-square"></i>
                <i class="m-2 fa-2x fas fa-pencil-alt"></i>
                <i class="m-2 fa-2x fas fa-pencil-ruler"></i>
                <i class="m-2 fa-2x fas fa-people-carry"></i>
                <i class="m-2 fa-2x fas fa-percent"></i>
                <i class="m-2 fa-2x fas fa-percentage"></i>
                <i class="m-2 fa-2x fab fa-periscope"></i>
                <i class="m-2 fa-2x fab fa-phabricator"></i>
                <i class="m-2 fa-2x fab fa-phoenix-framework"></i>
                <i class="m-2 fa-2x fab fa-phoenix-squadron"></i>
                <i class="m-2 fa-2x fas fa-phone"></i>
                <i class="m-2 fa-2x fas fa-phone-slash"></i>
                <i class="m-2 fa-2x fas fa-phone-square"></i>
                <i class="m-2 fa-2x fas fa-phone-volume"></i>
                <i class="m-2 fa-2x fab fa-php"></i>
                <i class="m-2 fa-2x fab fa-pied-piper"></i>
                <i class="m-2 fa-2x fab fa-pied-piper-alt"></i>
                <i class="m-2 fa-2x fab fa-pied-piper-hat"></i>
                <i class="m-2 fa-2x fab fa-pied-piper-pp"></i>
                <i class="m-2 fa-2x fas fa-piggy-bank"></i>
                <i class="m-2 fa-2x fas fa-pills"></i>
                <i class="m-2 fa-2x fab fa-pinterest"></i>
                <i class="m-2 fa-2x fab fa-pinterest-p"></i>
                <i class="m-2 fa-2x fab fa-pinterest-square"></i>
                <i class="m-2 fa-2x fas fa-plane"></i>
                <i class="m-2 fa-2x fas fa-plane-arrival"></i>
                <i class="m-2 fa-2x fas fa-plane-departure"></i>
                <i class="m-2 fa-2x fas fa-play"></i>
                <i class="m-2 fa-2x fas fa-play-circle"></i>
                <i class="m-2 fa-2x far fa-play-circle"></i>
                <i class="m-2 fa-2x fab fa-playstation"></i>
                <i class="m-2 fa-2x fas fa-plug"></i>
                <i class="m-2 fa-2x fas fa-plus"></i>
                <i class="m-2 fa-2x fas fa-plus-circle"></i>
                <i class="m-2 fa-2x fas fa-plus-square"></i>
                <i class="m-2 fa-2x far fa-plus-square"></i>
                <i class="m-2 fa-2x fas fa-podcast"></i>
                <i class="m-2 fa-2x fas fa-poo"></i>
                <i class="m-2 fa-2x fas fa-poop"></i>
                <i class="m-2 fa-2x fas fa-portrait"></i>
                <i class="m-2 fa-2x fas fa-pound-sign"></i>
                <i class="m-2 fa-2x fas fa-power-off"></i>
                <i class="m-2 fa-2x fas fa-prescription"></i>
                <i class="m-2 fa-2x fas fa-prescription-bottle"></i>
                <i class="m-2 fa-2x fas fa-prescription-bottle-alt"></i>
                <i class="m-2 fa-2x fas fa-print"></i>
                <i class="m-2 fa-2x fas fa-procedures"></i>
                <i class="m-2 fa-2x fab fa-product-hunt"></i>
                <i class="m-2 fa-2x fas fa-project-diagram"></i>
                <i class="m-2 fa-2x fab fa-pushed"></i>
                <i class="m-2 fa-2x fas fa-puzzle-piece"></i>
                <i class="m-2 fa-2x fab fa-python"></i>
                <i class="m-2 fa-2x fab fa-qq"></i>
                <i class="m-2 fa-2x fas fa-qrcode"></i>
                <i class="m-2 fa-2x fas fa-question"></i>
                <i class="m-2 fa-2x fas fa-question-circle"></i>
                <i class="m-2 fa-2x far fa-question-circle"></i>
                <i class="m-2 fa-2x fas fa-quidditch"></i>
                <i class="m-2 fa-2x fab fa-quinscape"></i>
                <i class="m-2 fa-2x fab fa-quora"></i>
                <i class="m-2 fa-2x fas fa-quote-left"></i>
                <i class="m-2 fa-2x fas fa-quote-right"></i>
                <i class="m-2 fa-2x fab fa-r-project"></i>
                <i class="m-2 fa-2x fas fa-random"></i>
                <i class="m-2 fa-2x fab fa-ravelry"></i>
                <i class="m-2 fa-2x fab fa-react"></i>
                <i class="m-2 fa-2x fab fa-readme"></i>
                <i class="m-2 fa-2x fab fa-rebel"></i>
                <i class="m-2 fa-2x fas fa-receipt"></i>
                <i class="m-2 fa-2x fas fa-recycle"></i>
                <i class="m-2 fa-2x fab fa-red-river"></i>
                <i class="m-2 fa-2x fab fa-reddit"></i>
                <i class="m-2 fa-2x fab fa-reddit-alien"></i>
                <i class="m-2 fa-2x fab fa-reddit-square"></i>
                <i class="m-2 fa-2x fas fa-redo"></i>
                <i class="m-2 fa-2x fas fa-redo-alt"></i>
                <i class="m-2 fa-2x fas fa-registered"></i>
                <i class="m-2 fa-2x far fa-registered"></i>
                <i class="m-2 fa-2x fab fa-rendact"></i>
                <i class="m-2 fa-2x fab fa-renren"></i>
                <i class="m-2 fa-2x fas fa-reply"></i>
                <i class="m-2 fa-2x fas fa-reply-all"></i>
                <i class="m-2 fa-2x fab fa-replyd"></i>
                <i class="m-2 fa-2x fab fa-researchgate"></i>
                <i class="m-2 fa-2x fab fa-resolving"></i>
                <i class="m-2 fa-2x fas fa-retweet"></i>
                <i class="m-2 fa-2x fab fa-rev"></i>
                <i class="m-2 fa-2x fas fa-ribbon"></i>
                <i class="m-2 fa-2x fas fa-road"></i>
                <i class="m-2 fa-2x fas fa-robot"></i>
                <i class="m-2 fa-2x fas fa-rocket"></i>
                <i class="m-2 fa-2x fab fa-rocketchat"></i>
                <i class="m-2 fa-2x fab fa-rockrms"></i>
                <i class="m-2 fa-2x fas fa-route"></i>
                <i class="m-2 fa-2x fas fa-rss"></i>
                <i class="m-2 fa-2x fas fa-rss-square"></i>
                <i class="m-2 fa-2x fas fa-ruble-sign"></i>
                <i class="m-2 fa-2x fas fa-ruler"></i>
                <i class="m-2 fa-2x fas fa-ruler-combined"></i>
                <i class="m-2 fa-2x fas fa-ruler-horizontal"></i>
                <i class="m-2 fa-2x fas fa-ruler-vertical"></i>
                <i class="m-2 fa-2x fas fa-rupee-sign"></i>
                <i class="m-2 fa-2x fas fa-sad-cry"></i>
                <i class="m-2 fa-2x far fa-sad-cry"></i>
                <i class="m-2 fa-2x fas fa-sad-tear"></i>
                <i class="m-2 fa-2x far fa-sad-tear"></i>
                <i class="m-2 fa-2x fab fa-safari"></i>
                <i class="m-2 fa-2x fab fa-sass"></i>
                <i class="m-2 fa-2x fas fa-save"></i>
                <i class="m-2 fa-2x far fa-save"></i>
                <i class="m-2 fa-2x fab fa-schlix"></i>
                <i class="m-2 fa-2x fas fa-school"></i>
                <i class="m-2 fa-2x fas fa-screwdriver"></i>
                <i class="m-2 fa-2x fab fa-scribd"></i>
                <i class="m-2 fa-2x fas fa-search"></i>
                <i class="m-2 fa-2x fas fa-search-minus"></i>
                <i class="m-2 fa-2x fas fa-search-plus"></i>
                <i class="m-2 fa-2x fab fa-searchengin"></i>
                <i class="m-2 fa-2x fas fa-seedling"></i>
                <i class="m-2 fa-2x fab fa-sellcast"></i>
                <i class="m-2 fa-2x fab fa-sellsy"></i>
                <i class="m-2 fa-2x fas fa-server"></i>
                <i class="m-2 fa-2x fab fa-servicestack"></i>
                <i class="m-2 fa-2x fas fa-shapes"></i>
                <i class="m-2 fa-2x fas fa-share"></i>
                <i class="m-2 fa-2x fas fa-share-alt"></i>
                <i class="m-2 fa-2x fas fa-share-alt-square"></i>
                <i class="m-2 fa-2x fas fa-share-square"></i>
                <i class="m-2 fa-2x far fa-share-square"></i>
                <i class="m-2 fa-2x fas fa-shekel-sign"></i>
                <i class="m-2 fa-2x fas fa-shield-alt"></i>
                <i class="m-2 fa-2x fas fa-ship"></i>
                <i class="m-2 fa-2x fas fa-shipping-fast"></i>
                <i class="m-2 fa-2x fab fa-shirtsinbulk"></i>
                <i class="m-2 fa-2x fas fa-shoe-prints"></i>
                <i class="m-2 fa-2x fas fa-shopping-bag"></i>
                <i class="m-2 fa-2x fas fa-shopping-basket"></i>
                <i class="m-2 fa-2x fas fa-shopping-cart"></i>
                <i class="m-2 fa-2x fab fa-shopware"></i>
                <i class="m-2 fa-2x fas fa-shower"></i>
                <i class="m-2 fa-2x fas fa-shuttle-van"></i>
                <i class="m-2 fa-2x fas fa-sign"></i>
                <i class="m-2 fa-2x fas fa-sign-in-alt"></i>
                <i class="m-2 fa-2x fas fa-sign-language"></i>
                <i class="m-2 fa-2x fas fa-sign-out-alt"></i>
                <i class="m-2 fa-2x fas fa-signal"></i>
                <i class="m-2 fa-2x fas fa-signature"></i>
                <i class="m-2 fa-2x fab fa-simplybuilt"></i>
                <i class="m-2 fa-2x fab fa-sistrix"></i>
                <i class="m-2 fa-2x fas fa-sitemap"></i>
                <i class="m-2 fa-2x fab fa-sith"></i>
                <i class="m-2 fa-2x fas fa-skull"></i>
                <i class="m-2 fa-2x fab fa-skyatlas"></i>
                <i class="m-2 fa-2x fab fa-skype"></i>
                <i class="m-2 fa-2x fab fa-slack"></i>
                <i class="m-2 fa-2x fab fa-slack-hash"></i>
                <i class="m-2 fa-2x fas fa-sliders-h"></i>
                <i class="m-2 fa-2x fab fa-slideshare"></i>
                <i class="m-2 fa-2x fas fa-smile"></i>
                <i class="m-2 fa-2x far fa-smile"></i>
                <i class="m-2 fa-2x fas fa-smile-beam"></i>
                <i class="m-2 fa-2x far fa-smile-beam"></i>
                <i class="m-2 fa-2x fas fa-smile-wink"></i>
                <i class="m-2 fa-2x far fa-smile-wink"></i>
                <i class="m-2 fa-2x fas fa-smoking"></i>
                <i class="m-2 fa-2x fas fa-smoking-ban"></i>
                <i class="m-2 fa-2x fab fa-snapchat"></i>
                <i class="m-2 fa-2x fab fa-snapchat-ghost"></i>
                <i class="m-2 fa-2x fab fa-snapchat-square"></i>
                <i class="m-2 fa-2x fas fa-snowflake"></i>
                <i class="m-2 fa-2x far fa-snowflake"></i>
                <i class="m-2 fa-2x fas fa-solar-panel"></i>
                <i class="m-2 fa-2x fas fa-sort"></i>
                <i class="m-2 fa-2x fas fa-sort-alpha-down"></i>
                <i class="m-2 fa-2x fas fa-sort-alpha-up"></i>
                <i class="m-2 fa-2x fas fa-sort-amount-down"></i>
                <i class="m-2 fa-2x fas fa-sort-amount-up"></i>
                <i class="m-2 fa-2x fas fa-sort-down"></i>
                <i class="m-2 fa-2x fas fa-sort-numeric-down"></i>
                <i class="m-2 fa-2x fas fa-sort-numeric-up"></i>
                <i class="m-2 fa-2x fas fa-sort-up"></i>
                <i class="m-2 fa-2x fab fa-soundcloud"></i>
                <i class="m-2 fa-2x fas fa-spa"></i>
                <i class="m-2 fa-2x fas fa-space-shuttle"></i>
                <i class="m-2 fa-2x fab fa-speakap"></i>
                <i class="m-2 fa-2x fas fa-spinner"></i>
                <i class="m-2 fa-2x fas fa-splotch"></i>
                <i class="m-2 fa-2x fab fa-spotify"></i>
                <i class="m-2 fa-2x fas fa-spray-can"></i>
                <i class="m-2 fa-2x fas fa-square"></i>
                <i class="m-2 fa-2x far fa-square"></i>
                <i class="m-2 fa-2x fas fa-square-full"></i>
                <i class="m-2 fa-2x fab fa-squarespace"></i>
                <i class="m-2 fa-2x fab fa-stack-exchange"></i>
                <i class="m-2 fa-2x fab fa-stack-overflow"></i>
                <i class="m-2 fa-2x fas fa-stamp"></i>
                <i class="m-2 fa-2x fas fa-star"></i>
                <i class="m-2 fa-2x far fa-star"></i>
                <i class="m-2 fa-2x fas fa-star-half"></i>
                <i class="m-2 fa-2x far fa-star-half"></i>
                <i class="m-2 fa-2x fas fa-star-half-alt"></i>
                <i class="m-2 fa-2x fas fa-star-of-life"></i>
                <i class="m-2 fa-2x fab fa-staylinked"></i>
                <i class="m-2 fa-2x fab fa-steam"></i>
                <i class="m-2 fa-2x fab fa-steam-square"></i>
                <i class="m-2 fa-2x fab fa-steam-symbol"></i>
                <i class="m-2 fa-2x fas fa-step-backward"></i>
                <i class="m-2 fa-2x fas fa-step-forward"></i>
                <i class="m-2 fa-2x fas fa-stethoscope"></i>
                <i class="m-2 fa-2x fab fa-sticker-mule"></i>
                <i class="m-2 fa-2x fas fa-sticky-note"></i>
                <i class="m-2 fa-2x far fa-sticky-note"></i>
                <i class="m-2 fa-2x fas fa-stop"></i>
                <i class="m-2 fa-2x fas fa-stop-circle"></i>
                <i class="m-2 fa-2x far fa-stop-circle"></i>
                <i class="m-2 fa-2x fas fa-stopwatch"></i>
                <i class="m-2 fa-2x fas fa-store"></i>
                <i class="m-2 fa-2x fas fa-store-alt"></i>
                <i class="m-2 fa-2x fab fa-strava"></i>
                <i class="m-2 fa-2x fas fa-stream"></i>
                <i class="m-2 fa-2x fas fa-street-view"></i>
                <i class="m-2 fa-2x fas fa-strikethrough"></i>
                <i class="m-2 fa-2x fab fa-stripe"></i>
                <i class="m-2 fa-2x fab fa-stripe-s"></i>
                <i class="m-2 fa-2x fas fa-stroopwafel"></i>
                <i class="m-2 fa-2x fab fa-studiovinari"></i>
                <i class="m-2 fa-2x fab fa-stumbleupon"></i>
                <i class="m-2 fa-2x fab fa-stumbleupon-circle"></i>
                <i class="m-2 fa-2x fas fa-subscript"></i>
                <i class="m-2 fa-2x fas fa-subway"></i>
                <i class="m-2 fa-2x fas fa-suitcase"></i>
                <i class="m-2 fa-2x fas fa-suitcase-rolling"></i>
                <i class="m-2 fa-2x fas fa-sun"></i>
                <i class="m-2 fa-2x far fa-sun"></i>
                <i class="m-2 fa-2x fab fa-superpowers"></i>
                <i class="m-2 fa-2x fas fa-superscript"></i>
                <i class="m-2 fa-2x fab fa-supple"></i>
                <i class="m-2 fa-2x fas fa-surprise"></i>
                <i class="m-2 fa-2x far fa-surprise"></i>
                <i class="m-2 fa-2x fas fa-swatchbook"></i>
                <i class="m-2 fa-2x fas fa-swimmer"></i>
                <i class="m-2 fa-2x fas fa-swimming-pool"></i>
                <i class="m-2 fa-2x fas fa-sync"></i>
                <i class="m-2 fa-2x fas fa-sync-alt"></i>
                <i class="m-2 fa-2x fas fa-syringe"></i>
                <i class="m-2 fa-2x fas fa-table"></i>
                <i class="m-2 fa-2x fas fa-table-tennis"></i>
                <i class="m-2 fa-2x fas fa-tablet"></i>
                <i class="m-2 fa-2x fas fa-tablet-alt"></i>
                <i class="m-2 fa-2x fas fa-tablets"></i>
                <i class="m-2 fa-2x fas fa-tachometer-alt"></i>
                <i class="m-2 fa-2x fas fa-tag"></i>
                <i class="m-2 fa-2x fas fa-tags"></i>
                <i class="m-2 fa-2x fas fa-tape"></i>
                <i class="m-2 fa-2x fas fa-tasks"></i>
                <i class="m-2 fa-2x fas fa-taxi"></i>
                <i class="m-2 fa-2x fab fa-teamspeak"></i>
                <i class="m-2 fa-2x fas fa-teeth"></i>
                <i class="m-2 fa-2x fas fa-teeth-open"></i>
                <i class="m-2 fa-2x fab fa-telegram"></i>
                <i class="m-2 fa-2x fab fa-telegram-plane"></i>
                <i class="m-2 fa-2x fab fa-tencent-weibo"></i>
                <i class="m-2 fa-2x fas fa-terminal"></i>
                <i class="m-2 fa-2x fas fa-text-height"></i>
                <i class="m-2 fa-2x fas fa-text-width"></i>
                <i class="m-2 fa-2x fas fa-th"></i>
                <i class="m-2 fa-2x fas fa-th-large"></i>
                <i class="m-2 fa-2x fas fa-th-list"></i>
                <i class="m-2 fa-2x fas fa-theater-masks"></i>
                <i class="m-2 fa-2x fab fa-themeco"></i>
                <i class="m-2 fa-2x fab fa-themeisle"></i>
                <i class="m-2 fa-2x fas fa-thermometer"></i>
                <i class="m-2 fa-2x fas fa-thermometer-empty"></i>
                <i class="m-2 fa-2x fas fa-thermometer-full"></i>
                <i class="m-2 fa-2x fas fa-thermometer-half"></i>
                <i class="m-2 fa-2x fas fa-thermometer-quarter"></i>
                <i class="m-2 fa-2x fas fa-thermometer-three-quarters"></i>
                <i class="m-2 fa-2x fas fa-thumbs-down"></i>
                <i class="m-2 fa-2x far fa-thumbs-down"></i>
                <i class="m-2 fa-2x fas fa-thumbs-up"></i>
                <i class="m-2 fa-2x far fa-thumbs-up"></i>
                <i class="m-2 fa-2x fas fa-thumbtack"></i>
                <i class="m-2 fa-2x fas fa-ticket-alt"></i>
                <i class="m-2 fa-2x fas fa-times"></i>
                <i class="m-2 fa-2x fas fa-times-circle"></i>
                <i class="m-2 fa-2x far fa-times-circle"></i>
                <i class="m-2 fa-2x fas fa-tint"></i>
                <i class="m-2 fa-2x fas fa-tint-slash"></i>
                <i class="m-2 fa-2x fas fa-tired"></i>
                <i class="m-2 fa-2x far fa-tired"></i>
                <i class="m-2 fa-2x fas fa-toggle-off"></i>
                <i class="m-2 fa-2x fas fa-toggle-on"></i>
                <i class="m-2 fa-2x fas fa-toolbox"></i>
                <i class="m-2 fa-2x fas fa-tooth"></i>
                <i class="m-2 fa-2x fab fa-trade-federation"></i>
                <i class="m-2 fa-2x fas fa-trademark"></i>
                <i class="m-2 fa-2x fas fa-traffic-light"></i>
                <i class="m-2 fa-2x fas fa-train"></i>
                <i class="m-2 fa-2x fas fa-transgender"></i>
                <i class="m-2 fa-2x fas fa-transgender-alt"></i>
                <i class="m-2 fa-2x fas fa-trash"></i>
                <i class="m-2 fa-2x fas fa-trash-alt"></i>
                <i class="m-2 fa-2x far fa-trash-alt"></i>
                <i class="m-2 fa-2x fas fa-tree"></i>
                <i class="m-2 fa-2x fab fa-trello"></i>
                <i class="m-2 fa-2x fab fa-tripadvisor"></i>
                <i class="m-2 fa-2x fas fa-trophy"></i>
                <i class="m-2 fa-2x fas fa-truck"></i>
                <i class="m-2 fa-2x fas fa-truck-loading"></i>
                <i class="m-2 fa-2x fas fa-truck-monster"></i>
                <i class="m-2 fa-2x fas fa-truck-moving"></i>
                <i class="m-2 fa-2x fas fa-truck-pickup"></i>
                <i class="m-2 fa-2x fas fa-tshirt"></i>
                <i class="m-2 fa-2x fas fa-tty"></i>
                <i class="m-2 fa-2x fab fa-tumblr"></i>
                <i class="m-2 fa-2x fab fa-tumblr-square"></i>
                <i class="m-2 fa-2x fas fa-tv"></i>
                <i class="m-2 fa-2x fab fa-twitch"></i>
                <i class="m-2 fa-2x fab fa-twitter"></i>
                <i class="m-2 fa-2x fab fa-twitter-square"></i>
                <i class="m-2 fa-2x fab fa-typo3"></i>
                <i class="m-2 fa-2x fab fa-uber"></i>
                <i class="m-2 fa-2x fab fa-uikit"></i>
                <i class="m-2 fa-2x fas fa-umbrella"></i>
                <i class="m-2 fa-2x fas fa-umbrella-beach"></i>
                <i class="m-2 fa-2x fas fa-underline"></i>
                <i class="m-2 fa-2x fas fa-undo"></i>
                <i class="m-2 fa-2x fas fa-undo-alt"></i>
                <i class="m-2 fa-2x fab fa-uniregistry"></i>
                <i class="m-2 fa-2x fas fa-universal-access"></i>
                <i class="m-2 fa-2x fas fa-university"></i>
                <i class="m-2 fa-2x fas fa-unlink"></i>
                <i class="m-2 fa-2x fas fa-unlock"></i>
                <i class="m-2 fa-2x fas fa-unlock-alt"></i>
                <i class="m-2 fa-2x fab fa-untappd"></i>
                <i class="m-2 fa-2x fas fa-upload"></i>
                <i class="m-2 fa-2x fab fa-usb"></i>
                <i class="m-2 fa-2x fas fa-user"></i>
                <i class="m-2 fa-2x far fa-user"></i>
                <i class="m-2 fa-2x fas fa-user-alt"></i>
                <i class="m-2 fa-2x fas fa-user-alt-slash"></i>
                <i class="m-2 fa-2x fas fa-user-astronaut"></i>
                <i class="m-2 fa-2x fas fa-user-check"></i>
                <i class="m-2 fa-2x fas fa-user-circle"></i>
                <i class="m-2 fa-2x far fa-user-circle"></i>
                <i class="m-2 fa-2x fas fa-user-clock"></i>
                <i class="m-2 fa-2x fas fa-user-cog"></i>
                <i class="m-2 fa-2x fas fa-user-edit"></i>
                <i class="m-2 fa-2x fas fa-user-friends"></i>
                <i class="m-2 fa-2x fas fa-user-graduate"></i>
                <i class="m-2 fa-2x fas fa-user-lock"></i>
                <i class="m-2 fa-2x fas fa-user-md"></i>
                <i class="m-2 fa-2x fas fa-user-minus"></i>
                <i class="m-2 fa-2x fas fa-user-ninja"></i>
                <i class="m-2 fa-2x fas fa-user-plus"></i>
                <i class="m-2 fa-2x fas fa-user-secret"></i>
                <i class="m-2 fa-2x fas fa-user-shield"></i>
                <i class="m-2 fa-2x fas fa-user-slash"></i>
                <i class="m-2 fa-2x fas fa-user-tag"></i>
                <i class="m-2 fa-2x fas fa-user-tie"></i>
                <i class="m-2 fa-2x fas fa-user-times"></i>
                <i class="m-2 fa-2x fas fa-users"></i>
                <i class="m-2 fa-2x fas fa-users-cog"></i>
                <i class="m-2 fa-2x fab fa-ussunnah"></i>
                <i class="m-2 fa-2x fas fa-utensil-spoon"></i>
                <i class="m-2 fa-2x fas fa-utensils"></i>
                <i class="m-2 fa-2x fab fa-vaadin"></i>
                <i class="m-2 fa-2x fas fa-vector-square"></i>
                <i class="m-2 fa-2x fas fa-venus"></i>
                <i class="m-2 fa-2x fas fa-venus-double"></i>
                <i class="m-2 fa-2x fas fa-venus-mars"></i>
                <i class="m-2 fa-2x fab fa-viacoin"></i>
                <i class="m-2 fa-2x fab fa-viadeo"></i>
                <i class="m-2 fa-2x fab fa-viadeo-square"></i>
                <i class="m-2 fa-2x fas fa-vial"></i>
                <i class="m-2 fa-2x fas fa-vials"></i>
                <i class="m-2 fa-2x fab fa-viber"></i>
                <i class="m-2 fa-2x fas fa-video"></i>
                <i class="m-2 fa-2x fas fa-video-slash"></i>
                <i class="m-2 fa-2x fab fa-vimeo"></i>
                <i class="m-2 fa-2x fab fa-vimeo-square"></i>
                <i class="m-2 fa-2x fab fa-vimeo-v"></i>
                <i class="m-2 fa-2x fab fa-vine"></i>
                <i class="m-2 fa-2x fab fa-vk"></i>
                <i class="m-2 fa-2x fab fa-vnv"></i>
                <i class="m-2 fa-2x fas fa-volleyball-ball"></i>
                <i class="m-2 fa-2x fas fa-volume-down"></i>
                <i class="m-2 fa-2x fas fa-volume-off"></i>
                <i class="m-2 fa-2x fas fa-volume-up"></i>
                <i class="m-2 fa-2x fab fa-vuejs"></i>
                <i class="m-2 fa-2x fas fa-walking"></i>
                <i class="m-2 fa-2x fas fa-wallet"></i>
                <i class="m-2 fa-2x fas fa-warehouse"></i>
                <i class="m-2 fa-2x fab fa-weebly"></i>
                <i class="m-2 fa-2x fab fa-weibo"></i>
                <i class="m-2 fa-2x fas fa-weight"></i>
                <i class="m-2 fa-2x fas fa-weight-hanging"></i>
                <i class="m-2 fa-2x fab fa-weixin"></i>
                <i class="m-2 fa-2x fab fa-whatsapp"></i>
                <i class="m-2 fa-2x fab fa-whatsapp-square"></i>
                <i class="m-2 fa-2x fas fa-wheelchair"></i>
                <i class="m-2 fa-2x fab fa-whmcs"></i>
                <i class="m-2 fa-2x fas fa-wifi"></i>
                <i class="m-2 fa-2x fab fa-wikipedia-w"></i>
                <i class="m-2 fa-2x fas fa-window-close"></i>
                <i class="m-2 fa-2x far fa-window-close"></i>
                <i class="m-2 fa-2x fas fa-window-maximize"></i>
                <i class="m-2 fa-2x far fa-window-maximize"></i>
                <i class="m-2 fa-2x fas fa-window-minimize"></i>
                <i class="m-2 fa-2x far fa-window-minimize"></i>
                <i class="m-2 fa-2x fas fa-window-restore"></i>
                <i class="m-2 fa-2x far fa-window-restore"></i>
                <i class="m-2 fa-2x fab fa-windows"></i>
                <i class="m-2 fa-2x fas fa-wine-glass"></i>
                <i class="m-2 fa-2x fas fa-wine-glass-alt"></i>
                <i class="m-2 fa-2x fab fa-wix"></i>
                <i class="m-2 fa-2x fab fa-wolf-pack-battalion"></i>
                <i class="m-2 fa-2x fas fa-won-sign"></i>
                <i class="m-2 fa-2x fab fa-wordpress"></i>
                <i class="m-2 fa-2x fab fa-wordpress-simple"></i>
                <i class="m-2 fa-2x fab fa-wpbeginner"></i>
                <i class="m-2 fa-2x fab fa-wpexplorer"></i>
                <i class="m-2 fa-2x fab fa-wpforms"></i>
                <i class="m-2 fa-2x fas fa-wrench"></i>
                <i class="m-2 fa-2x fas fa-x-ray"></i>
                <i class="m-2 fa-2x fab fa-xbox"></i>
                <i class="m-2 fa-2x fab fa-xing"></i>
                <i class="m-2 fa-2x fab fa-xing-square"></i>
                <i class="m-2 fa-2x fab fa-y-combinator"></i>
                <i class="m-2 fa-2x fab fa-yahoo"></i>
                <i class="m-2 fa-2x fab fa-yandex"></i>
                <i class="m-2 fa-2x fab fa-yandex-international"></i>
                <i class="m-2 fa-2x fab fa-yelp"></i>
                <i class="m-2 fa-2x fas fa-yen-sign"></i>
                <i class="m-2 fa-2x fab fa-yoast"></i>
                <i class="m-2 fa-2x fab fa-youtube"></i>
                <i class="m-2 fa-2x fab fa-youtube-square"></i>
                <i class="m-2 fa-2x fab fa-zhihu"></i>

            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Typography</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h1>h1. Bootstrap heading</h1>
                        <h2>h2. Bootstrap heading</h2>
                        <h3>h3. Bootstrap heading</h3>
                        <h4>h4. Bootstrap heading</h4>
                        <h5>h5. Bootstrap heading</h5>
                        <h6>h6. Bootstrap heading</h6>

                        <p class="h1">h1. Bootstrap heading</p>
                        <p class="h2">h2. Bootstrap heading</p>
                        <p class="h3">h3. Bootstrap heading</p>
                        <p class="h4">h4. Bootstrap heading</p>
                        <p class="h5">h5. Bootstrap heading</p>
                        <p class="h6">h6. Bootstrap heading</p>
                    </div>
                    <div class="col">
                        <h3>
                            Fancy display heading
                            <small class="text-muted">With faded secondary text</small>
                        </h3>
                        <h1 class="display-1">Display 1</h1>
                        <h2 class="display-2">Display 2</h2>
                        <h3 class="display-3">Display 3</h3>
                        <h4 class="display-4">Display 4</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <p class="lead">
                            Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                        </p>
                        <p>You can use the mark tag to
                            <mark>highlight</mark>
                            text.
                        </p>
                        <p>
                            <del>This line of text is meant to be treated as deleted text.</del>
                        </p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p>
                            <ins>This line of text is meant to be treated as an addition to the document.</ins>
                        </p>
                        <p><u>This line of text will render as underlined</u></p>
                        <p>
                            <small>This line of text is meant to be treated as fine print.</small>
                        </p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>
                    </div>
                    <div class="col">
                        <p><abbr title="attribute">attr</abbr></p>
                        <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <blockquote class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in
                                <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-center">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in
                                <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                        <blockquote class="blockquote text-right">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in
                                <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ul>
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ul>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-inline">
                            <li class="list-inline-item">Lorem ipsum</li>
                            <li class="list-inline-item">Phasellus iaculis</li>
                            <li class="list-inline-item">Nulla volutpat</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit
                                <ol type="a">
                                    <li>Phasellus iaculis neque</li>
                                    <li>Purus sodales ultricies</li>
                                    <li>Vestibulum laoreet porttitor sem</li>
                                    <li>Ac tristique libero volutpat at</li>
                                </ol>
                            </li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-8">
                        <dl class="row">
                            <dt class="col-sm-3">Description lists</dt>
                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                            <dt class="col-sm-3">Euismod</dt>
                            <dd class="col-sm-9">
                                <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                <p>Donec id elit non mi porta gravida at eget metus.</p>
                            </dd>

                            <dt class="col-sm-3">Malesuada porta</dt>
                            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                            </dd>

                            <dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                </dl>
                            </dd>
                        </dl>
                    </div>
                    <div class="col">
                        <var>y</var> = <var>m</var><var>x</var> + <var>b</var>
                        <br>
                        For example, <code>&lt;section&gt;</code> should be wrapped as inline.
                        <br><br>
                        <pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;</code></pre>
                        <pre>.example-element {margin-bottom: 1rem;}</pre>
                        <samp>This text is meant to be treated as sample output from a computer program.</samp>
                        <br><br>
                        To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
                        To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="card">
            <div class="card-header">Table</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-striped table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-hover table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-sm table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Class</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="table-active">
                                <th scope="row">Active</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">Default</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>


                            <tr class="table-primary">
                                <th scope="row">Primary</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-secondary">
                                <th scope="row">Secondary</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-success">
                                <th scope="row">Success</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-danger">
                                <th scope="row">Danger</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-warning">
                                <th scope="row">Warning</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Info</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-light">
                                <th scope="row">Light</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="table-dark">
                                <th scope="row">Dark</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="bg-primary">
                                <th scope="row">1</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="bg-success">
                                <th scope="row">3</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="bg-info">
                                <th scope="row">5</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="bg-warning">
                                <th scope="row">7</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            <tr class="bg-danger">
                                <th scope="row">9</th>
                                <td>Cell</td>
                                <td>Cell</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Buttons</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                        <hr>
                        <button type="button" class="btn btn-primary disabled">Primary</button>
                        <button type="button" class="btn btn-secondary disabled">Secondary</button>
                        <button type="button" class="btn btn-success disabled">Success</button>
                        <button type="button" class="btn btn-danger disabled">Danger</button>
                        <button type="button" class="btn btn-warning disabled">Warning</button>
                        <button type="button" class="btn btn-info disabled">Info</button>
                        <button type="button" class="btn btn-light disabled">Light</button>
                        <button type="button" class="btn btn-dark disabled">Dark</button>
                        <button type="button" class="btn btn-link disabled">Link</button>
                        <hr>
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-light">Light</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                        <hr>

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-success">Success</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-info">Info</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop4" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                        <button class="btn btn-primary" type="submit">Button</button>
                        <input class="btn btn-primary" type="button" value="Input">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" value="Reset">
                        <hr>
                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                        <hr>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                        <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                        <hr>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="checkbox" checked="" autocomplete="off"> Active
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off"> Check
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox" autocomplete="off"> Check
                            </label>
                        </div>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked=""> Active
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                            </label>
                        </div>
                        <hr>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary">1</button>
                                <button type="button" class="btn btn-secondary">2</button>
                                <button type="button" class="btn btn-secondary">3</button>
                                <button type="button" class="btn btn-secondary">4</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">5</button>
                                <button type="button" class="btn btn-secondary">6</button>
                                <button type="button" class="btn btn-secondary">7</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary">8</button>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
                        <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
                        <hr>
                        <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                        <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                        <hr>
                        <a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
                        <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
                        <hr>
                        <div class="btn-group-vertical" data-toggle="buttons">
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Primary
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Secondary
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Success
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Warning
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <hr>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <hr>
                        <div class="dropdown-menu" style="display: block; position: static;">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item active" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <a class="dropdown-item disabled" href="#">Disabled link</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <hr>
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <hr>

                        <div class="btn-group">
                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Large button
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->
                        <hr>
                        <div class="btn-group ml-2">
                            <button type="button" class="btn btn-lg btn-secondary">Large split button</button>
                            <button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div><!-- /btn-group -->

                        <hr>
                        <div class="btn-toolbar" role="toolbar">
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Small button
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div><!-- /btn-group -->
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-secondary">Small split button</button>
                                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(125px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div><!-- /btn-group -->
                        </div><!-- /btn-toolbar -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <hr>
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Library</li>
                        </ol>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active">Data</li>
                        </ol>
                    </div>
                    <div class="col">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                            </ul>
                        </nav>
                        <hr>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <hr>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                            Tooltip on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                            Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                            Tooltip on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                            Tooltip on left
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
                            Click to toggle popover
                        </button>
                        <hr>
                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            top
                        </button>

                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            right
                        </button>

                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
                            bottom
                        </button>

                        <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            left
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Modals</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="modal" tabindex="-1" role="dialog" style="position: relative;top: auto;right: auto;bottom: auto;left: auto;z-index: 1;display: block;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti labore, laborum quod tenetur velit? Accusantium
                                        asperiores beatae consectetur dignissimos doloribus ipsam laborum libero minima neque ratione. Earum, harum vel?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Scrolling long content</button>
                        <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo
                                            risus, porta ac consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum
                                            faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec
                                            sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalPopovers">Tooltips and popovers</button>
                        <div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalPopoversLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Popover in a modal</h5>
                                        <p>This
                                            <a href="#" role="button" class="btn btn-secondary popover-test" title="" data-content="Popover body content is set in this attribute." data-container="#exampleModalPopovers" data-original-title="Popover title">button</a>
                                            triggers a popover on click.</p>
                                        <hr>
                                        <h5>Tooltips in a modal</h5>
                                        <p>
                                            <a href="#" class="tooltip-test" title="" data-container="#exampleModalPopovers" data-original-title="Tooltip">This
                                                link</a> and
                                            <a href="#" class="tooltip-test" title="" data-container="#exampleModalPopovers" data-original-title="Tooltip">that
                                                link</a> have tooltips on hover.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Form</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form>
                            <fieldset>
                                <legend>Legend</legend>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Example select</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect2">Example multiple select</label>
                                    <select multiple="" class="form-control" id="exampleSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Example textarea</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit
                                        lighter and easily wraps to a new line.
                                    </small>
                                </div>
                                <fieldset class="form-group">
                                    <legend>Radio buttons</legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                            Option three is disabled
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="form-group">
                                    <legend>Checkboxes</legend>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                            Option one is this and that—be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" disabled="">
                                            Option two is disabled
                                        </label>
                                    </div>
                                </fieldset>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <fieldset disabled="">
                                <label class="control-label" for="disabledInput">Disabled input</label>
                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                            </fieldset>
                        </div>

                        <div class="form-group">
                            <fieldset>
                                <label class="control-label" for="readOnlyInput">Readonly input</label>
                                <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here…" readonly="">
                            </fieldset>
                        </div>

                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Valid input</label>
                            <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                            <div class="valid-feedback">Success! You've done it.</div>
                        </div>

                        <div class="form-group has-danger">
                            <label class="form-control-label" for="inputDanger1">Invalid input</label>
                            <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                            <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="inputDefault">Default input</label>
                            <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Input addons</label>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <fieldset>
                            <legend>Custom forms</legend>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled="">
                                    <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
                                    <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="country_id">Select2 Country</label>
                            <select id="country_id" class="select2 form-control" data-placeholder="" name="country_id">
                                <option value="0">Select Country</option>
                                <option value="1">Afghanistan</option>
                                <option value="2">Aland Islands</option>
                                <option value="3">Albania</option>
                                <option value="4">Algeria</option>
                                <option value="5">American Samoa</option>
                                <option value="6">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="8">Anguilla</option>
                                <option value="9">Antarctica</option>
                                <option value="10">Antigua and Barbuda</option>
                                <option value="11">Argentina</option>
                                <option value="12">Armenia</option>
                                <option value="13">Aruba</option>
                                <option value="14">Australia</option>
                                <option value="15">Austria</option>
                                <option value="16">Azerbaijan</option>
                                <option value="17">Bahamas</option>
                                <option value="18">Bahrain</option>
                                <option value="19">Bangladesh</option>
                                <option value="20">Barbados</option>
                                <option value="21">Belarus</option>
                                <option value="22">Belgium</option>
                                <option value="23">Belize</option>
                                <option value="24">Benin</option>
                                <option value="25">Bermuda</option>
                                <option value="26">Bhutan</option>
                                <option value="27">Bolivia</option>
                                <option value="28">Bonaire, Saint Eustatius and Saba</option>
                                <option value="29">Bosnia and Herzegovina</option>
                                <option value="30">Botswana</option>
                                <option value="31">Bouvet Island</option>
                                <option value="32">Brazil</option>
                                <option value="33">British Indian Ocean Territory</option>
                                <option value="34">British Virgin Islands</option>
                                <option value="35">Brunei</option>
                                <option value="36">Bulgaria</option>
                                <option value="37">Burkina Faso</option>
                                <option value="38">Burundi</option>
                                <option value="39">Cambodia</option>
                                <option value="40">Cameroon</option>
                                <option value="41">Canada</option>
                                <option value="42">Cape Verde</option>
                                <option value="43">Cayman Islands</option>
                                <option value="44">Central African Republic</option>
                                <option value="45">Chad</option>
                                <option value="46">Chile</option>
                                <option value="47">China</option>
                                <option value="48">Christmas Island</option>
                                <option value="49">Cocos Islands</option>
                                <option value="50">Colombia</option>
                                <option value="51">Comoros</option>
                                <option value="52">Cook Islands</option>
                                <option value="53">Costa Rica</option>
                                <option value="54">Croatia</option>
                                <option value="55">Cuba</option>
                                <option value="56">Curacao</option>
                                <option value="57">Cyprus</option>
                                <option value="58">Czech Republic</option>
                                <option value="59">Democratic Republic of the Congo</option>
                                <option value="60">Denmark</option>
                                <option value="61">Djibouti</option>
                                <option value="62">Dominica</option>
                                <option value="63">Dominican Republic</option>
                                <option value="64">East Timor</option>
                                <option value="65">Ecuador</option>
                                <option value="66">Egypt</option>
                                <option value="67">El Salvador</option>
                                <option value="68">Equatorial Guinea</option>
                                <option value="69">Eritrea</option>
                                <option value="70">Estonia</option>
                                <option value="71">Ethiopia</option>
                                <option value="72">Falkland Islands</option>
                                <option value="73">Faroe Islands</option>
                                <option value="74">Fiji</option>
                                <option value="75">Finland</option>
                                <option value="76">France</option>
                                <option value="77">French Guiana</option>
                                <option value="78">French Polynesia</option>
                                <option value="79">French Southern Territories</option>
                                <option value="80">Gabon</option>
                                <option value="81">Gambia</option>
                                <option value="82">Georgia</option>
                                <option value="83">Germany</option>
                                <option value="84">Ghana</option>
                                <option value="85">Gibraltar</option>
                                <option value="86">Greece</option>
                                <option value="87">Greenland</option>
                                <option value="88">Grenada</option>
                                <option value="89">Guadeloupe</option>
                                <option value="90">Guam</option>
                                <option value="91">Guatemala</option>
                                <option value="92">Guernsey</option>
                                <option value="93">Guinea</option>
                                <option value="94">GuineaBissau</option>
                                <option value="95">Guyana</option>
                                <option value="96">Haiti</option>
                                <option value="97">Heard Island and McDonald Islands</option>
                                <option value="98">Honduras</option>
                                <option value="99">Hong Kong</option>
                                <option value="100">Hungary</option>
                                <option value="101">Iceland</option>
                                <option value="102">India</option>
                                <option value="103">Indonesia</option>
                                <option value="104">Iran</option>
                                <option value="105">Iraq</option>
                                <option value="106">Ireland</option>
                                <option value="107">Isle of Man</option>
                                <option value="108">Israel</option>
                                <option value="109">Italy</option>
                                <option value="110">Ivory Coast</option>
                                <option value="111">Jamaica</option>
                                <option value="112">Japan</option>
                                <option value="113">Jersey</option>
                                <option value="114">Jordan</option>
                                <option value="115">Kazakhstan</option>
                                <option value="116">Kenya</option>
                                <option value="117">Kiribati</option>
                                <option value="118">Kosovo</option>
                                <option value="119">Kuwait</option>
                                <option value="120">Kyrgyzstan</option>
                                <option value="121">Laos</option>
                                <option value="122">Latvia</option>
                                <option value="123">Lebanon</option>
                                <option value="124">Lesotho</option>
                                <option value="125">Liberia</option>
                                <option value="126">Libya</option>
                                <option value="127">Liechtenstein</option>
                                <option value="128">Lithuania</option>
                                <option value="129">Luxembourg</option>
                                <option value="130">Macao</option>
                                <option value="131">Macedonia</option>
                                <option value="132">Madagascar</option>
                                <option value="133">Malawi</option>
                                <option value="134">Malaysia</option>
                                <option value="135">Maldives</option>
                                <option value="136">Mali</option>
                                <option value="137">Malta</option>
                                <option value="138">Marshall Islands</option>
                                <option value="139">Martinique</option>
                                <option value="140">Mauritania</option>
                                <option value="141">Mauritius</option>
                                <option value="142">Mayotte</option>
                                <option value="143">Mexico</option>
                                <option value="144">Micronesia</option>
                                <option value="145">Moldova</option>
                                <option value="146">Monaco</option>
                                <option value="147">Mongolia</option>
                                <option value="148">Montenegro</option>
                                <option value="149">Montserrat</option>
                                <option value="150">Morocco</option>
                                <option value="151">Mozambique</option>
                                <option value="152">Myanmar</option>
                                <option value="153">Namibia</option>
                                <option value="154">Nauru</option>
                                <option value="155">Nepal</option>
                                <option value="156">Netherlands</option>
                                <option value="157">Netherlands Antilles</option>
                                <option value="158">New Caledonia</option>
                                <option value="159">New Zealand</option>
                                <option value="160">Nicaragua</option>
                                <option value="161">Niger</option>
                                <option value="162">Nigeria</option>
                                <option value="163">Niue</option>
                                <option value="164">Norfolk Island</option>
                                <option value="165">North Korea</option>
                                <option value="166">Northern Mariana Islands</option>
                                <option value="167">Norway</option>
                                <option value="168">Oman</option>
                                <option value="169">Pakistan</option>
                                <option value="170">Palau</option>
                                <option value="171">Palestinian Territory</option>
                                <option value="172">Panama</option>
                                <option value="173">Papua New Guinea</option>
                                <option value="174">Paraguay</option>
                                <option value="175">Peru</option>
                                <option value="176">Philippines</option>
                                <option value="177">Pitcairn</option>
                                <option value="178">Poland</option>
                                <option value="179">Portugal</option>
                                <option value="180">Puerto Rico</option>
                                <option value="181">Qatar</option>
                                <option value="182">Republic of the Congo</option>
                                <option value="183">Reunion</option>
                                <option value="184">Romania</option>
                                <option value="185">Russia</option>
                                <option value="186">Rwanda</option>
                                <option value="187">Saint Barthelemy</option>
                                <option value="188">Saint Helena</option>
                                <option value="189">Saint Kitts and Nevis</option>
                                <option value="190">Saint Lucia</option>
                                <option value="191">Saint Martin</option>
                                <option value="192">Saint Pierre and Miquelon</option>
                                <option value="193">Saint Vincent and the Grenadines</option>
                                <option value="194">Samoa</option>
                                <option value="195">San Marino</option>
                                <option value="196">Sao Tome and Principe</option>
                                <option value="197">Saudi Arabia</option>
                                <option value="198">Senegal</option>
                                <option value="199">Serbia</option>
                                <option value="200">Serbia and Montenegro</option>
                                <option value="201">Seychelles</option>
                                <option value="202">Sierra Leone</option>
                                <option value="203">Singapore</option>
                                <option value="204">Sint Maarten</option>
                                <option value="205">Slovakia</option>
                                <option value="206">Slovenia</option>
                                <option value="207">Solomon Islands</option>
                                <option value="208">Somalia</option>
                                <option value="209">South Africa</option>
                                <option value="210">South Georgia and the South Sandwich Islands</option>
                                <option value="211">South Korea</option>
                                <option value="212">South Sudan</option>
                                <option value="213">Spain</option>
                                <option value="214">Sri Lanka</option>
                                <option value="215">Sudan</option>
                                <option value="216">Suriname</option>
                                <option value="217">Svalbard and Jan Mayen</option>
                                <option value="218">Swaziland</option>
                                <option value="219">Sweden</option>
                                <option value="220">Switzerland</option>
                                <option value="221">Syria</option>
                                <option value="222">Taiwan</option>
                                <option value="223">Tajikistan</option>
                                <option value="224">Tanzania</option>
                                <option value="225">Thailand</option>
                                <option value="226">Togo</option>
                                <option value="227">Tokelau</option>
                                <option value="228">Tonga</option>
                                <option value="229">Trinidad and Tobago</option>
                                <option value="230">Tunisia</option>
                                <option value="231">Turkey</option>
                                <option value="232">Turkmenistan</option>
                                <option value="233">Turks and Caicos Islands</option>
                                <option value="234">Tuvalu</option>
                                <option value="235">U.S. Virgin Islands</option>
                                <option value="236">Uganda</option>
                                <option value="237">Ukraine</option>
                                <option value="238">United Arab Emirates</option>
                                <option value="239">United Kingdom</option>
                                <option value="240">United States</option>
                                <option value="241">United States Minor Outlying Islands</option>
                                <option value="242">Uruguay</option>
                                <option value="243">Uzbekistan</option>
                                <option value="244">Vanuatu</option>
                                <option value="245">Vatican</option>
                                <option value="246">Venezuela</option>
                                <option value="247">Vietnam</option>
                                <option value="248">Wallis and Futuna</option>
                                <option value="249">Western Sahara</option>
                                <option value="250">Yemen</option>
                                <option value="251">Zambia</option>
                                <option value="252">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="name_aka">Select2 Tags</label>
                            <select multiple="multiple" id="name_aka" class="select2-tag form-control" data-placeholder="Please enter Names separated by a comma" name="name_aka[]">
                                <option value="6" selected>Andorra</option>
                                <option value="7" selected>Angola</option>
                                <option value="8" selected>Anguilla</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col">
                <div class="card" style="width: 300px;">
                    <img class="card-img-top" src="https://via.placeholder.com/300x150" width="300" height="150">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/300x150" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Aut cum esse ex exercitationem hic iste maxime porro sunt? Assumenda corporis doloremque dolorum eos, facere facilis
                            fuga iusto magni sequi voluptas.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Secondary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Success card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Danger card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Primary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-secondary mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Secondary card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Warning card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Info card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Dark card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Success card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-danger mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Danger card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-warning mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Warning card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-info mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Info card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Light card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card border-dark mb-3" style="max-width: 20rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h4 class="card-title">Dark card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Indicators</div>
            <div class="card-body">
                <div class="alert alert-dismissible alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4 class="alert-heading">Warning!</h4>
                    <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna,
                        <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            This is a primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            This is a secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            This is a success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            This is a danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            This is a warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            This is a info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            This is a light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            This is a dark alert—check it out!
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            This is a primary alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            This is a secondary alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            This is a success alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            This is a danger alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            This is a warning alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                            This is a info alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            This is a light alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                            This is a dark alert with
                            <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h1>Example heading <span class="badge badge-secondary">New</span></h1>
                        <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                        <h3>Example heading <span class="badge badge-secondary">New</span></h3>
                        <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                        <h5>Example heading <span class="badge badge-secondary">New</span></h5>
                        <h6>Example heading <span class="badge badge-secondary">New</span></h6>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">
                            Notifications <span class="badge badge-light">4</span>
                        </button>
                        <button type="button" class="btn btn-primary">
                            Profile <span class="badge badge-light">9</span>
                            <span class="sr-only">unread messages</span>
                        </button>
                        <hr>
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>
                        <hr>
                        <span class="badge badge-pill badge-primary">Primary</span>
                        <span class="badge badge-pill badge-secondary">Secondary</span>
                        <span class="badge badge-pill badge-success">Success</span>
                        <span class="badge badge-pill badge-danger">Danger</span>
                        <span class="badge badge-pill badge-warning">Warning</span>
                        <span class="badge badge-pill badge-info">Info</span>
                        <span class="badge badge-pill badge-light">Light</span>
                        <span class="badge badge-pill badge-dark">Dark</span>
                        <hr>
                        <a href="#" class="badge badge-primary">Primary</a>
                        <a href="#" class="badge badge-secondary">Secondary</a>
                        <a href="#" class="badge badge-success">Success</a>
                        <a href="#" class="badge badge-danger">Danger</a>
                        <a href="#" class="badge badge-warning">Warning</a>
                        <a href="#" class="badge badge-info">Info</a>
                        <a href="#" class="badge badge-light">Light</a>
                        <a href="#" class="badge badge-dark">Dark</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Navigation</div>
            <div class="card-body">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                    <div class="clearfix mt-2"></div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor02">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                    <div class="clearfix mt-2"></div>
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor03">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a class="nav-link active" href="#">Active</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </nav>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <nav class="nav flex-column">
                            <a class="nav-link active" href="#">Active</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link" href="#">Link</a>
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </nav>
                    </div>
                    <div class="col">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Progress Bars</div>
            <div class="card-body">
                <div class="progress m-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress m-2">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">List Groups</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item disabled">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active">
                                Cras justo odio
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
                            <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
                        </div>
                    </div>
                    <div class="col">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                            <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                            <li class="list-group-item list-group-item-success">This is a success list group item</li>
                            <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                            <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                            <li class="list-group-item list-group-item-info">This is a info list group item</li>
                            <li class="list-group-item list-group-item-light">This is a light list group item</li>
                            <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
                            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group item heading</h5>
                                    <small class="text-muted">3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Images</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <img src="https://placehold.it/200x200/6610f2/ffffff" class="img-fluid" alt="Responsive image">
                        <img src="https://placehold.it/200x200/2780E3/ffffff" class="img-thumbnail" alt="Thumbnail image">
                    </div>
                    <div class="col">
                        <img src="https://placehold.it/150x150/f0ad4e/ffffff" class="rounded float-left" alt="Responsive image">
                        <img src="https://placehold.it/150x150/9954BB/ffffff" class="rounded float-right" alt="Thumbnail image">
                        <img src="https://placehold.it/150x150/FF7518/ffffff" class="rounded mx-auto d-block" alt="Thumbnail image">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <figure class="figure">
                            <img src="https://placehold.it/300x200/6610f2/ffffff" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                    <div class="col">
                        <figure class="figure">
                            <img src="https://placehold.it/300x200/9954BB/ffffff" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-right">A caption for the above image.</figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://placehold.it/800x400/f0ad4e/ffffff" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://placehold.it/800x400/9954BB/ffffff" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://placehold.it/800x400/FF7518/ffffff" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Tags</div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="tag">First tag</span>
                        <span class="tag">Second tag</span>
                        <span class="tag">Third tag</span>
                    </div>
                    <div class="col">
                        <a href="#" class="tag">First tag</a>
                        <a href="#" class="tag">Second tag</a>
                        <a href="#" class="tag">Third tag</a>
                    </div>
                    <div class="col">
                        <span class="tag tag-rounded">First tag</span>
                        <span class="tag tag-rounded">Second tag</span>
                        <span class="tag tag-rounded">Third tag</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="tags">
                            <span class="tag tag-blue">Blue tag</span>
                            <span class="tag tag-azure">Azure tag</span>
                            <span class="tag tag-indigo">Indigo tag</span>
                            <span class="tag tag-purple">Purple tag</span>
                            <span class="tag tag-pink">Pink tag</span>
                            <span class="tag tag-red">Red tag</span>
                            <span class="tag tag-orange">Orange tag</span>
                            <span class="tag tag-yellow">Yellow tag</span>
                            <span class="tag tag-lime">Lime tag</span>
                            <span class="tag tag-green">Green tag</span>
                            <span class="tag tag-teal">Teal tag</span>
                            <span class="tag tag-cyan">Cyan tag</span>
                            <span class="tag tag-gray">Gray tag</span>
                            <span class="tag tag-gray-dark">Dark gray tag</span>
                        </div>
                        <div class="tags mt-3">
                            <span class="tag tag-bordered tag-border-blue">Blue tag</span>
                            <span class="tag tag-bordered tag-border-azure">Azure tag</span>
                            <span class="tag tag-bordered tag-border-indigo">Indigo tag</span>
                            <span class="tag tag-bordered tag-border-purple">Purple tag</span>
                            <span class="tag tag-bordered tag-border-pink">Pink tag</span>
                            <span class="tag tag-bordered tag-border-red">Red tag</span>
                            <span class="tag tag-bordered tag-border-orange">Orange tag</span>
                            <span class="tag tag-bordered tag-border-yellow">Yellow tag</span>
                            <span class="tag tag-bordered tag-border-lime">Lime tag</span>
                            <span class="tag tag-bordered tag-border-green">Green tag</span>
                            <span class="tag tag-bordered tag-border-teal">Teal tag</span>
                            <span class="tag tag-bordered tag-border-cyan">Cyan tag</span>
                            <span class="tag tag-bordered tag-border-gray">Gray tag</span>
                            <span class="tag tag-bordered tag-border-gray-dark">Dark gray tag</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tags">
                            <span class="tag">One</span>
                            <span class="tag">Two</span>
                            <span class="tag">Three</span>
                            <span class="tag">Four</span>
                            <span class="tag">Five</span>
                            <span class="tag">Six</span>
                            <span class="tag">Seven</span>
                            <span class="tag">Eight</span>
                            <span class="tag">Nine</span>
                            <span class="tag">Ten</span>
                            <span class="tag">Eleven</span>
                            <span class="tag">Twelve</span>
                            <span class="tag">Thirteen</span>
                            <span class="tag">Fourteen</span>
                            <span class="tag">Fifteen</span>
                            <span class="tag">Sixteen</span>
                            <span class="tag">Seventeen</span>
                            <span class="tag">Eighteen</span>
                            <span class="tag">Nineteen</span>
                            <span class="tag">Twenty</span>
                        </div>

                        <div class="tags mt-3">
                            <span class="tag tag-bordered">One</span>
                            <span class="tag tag-bordered">Two</span>
                            <span class="tag tag-bordered">Three</span>
                            <span class="tag tag-bordered">Four</span>
                            <span class="tag tag-bordered">Five</span>
                            <span class="tag tag-bordered">Six</span>
                            <span class="tag tag-bordered">Seven</span>
                            <span class="tag tag-bordered">Eight</span>
                            <span class="tag tag-bordered">Nine</span>
                            <span class="tag tag-bordered">Ten</span>
                            <span class="tag tag-bordered">Eleven</span>
                            <span class="tag tag-bordered">Twelve</span>
                            <span class="tag tag-bordered">Thirteen</span>
                            <span class="tag tag-bordered">Fourteen</span>
                            <span class="tag tag-bordered">Fifteen</span>
                            <span class="tag tag-bordered">Sixteen</span>
                            <span class="tag tag-bordered">Seventeen</span>
                            <span class="tag tag-bordered">Eighteen</span>
                            <span class="tag tag-bordered">Nineteen</span>
                            <span class="tag tag-bordered">Twenty</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="tags">
                            <div class="tag">
                                One
                                <a href="#" class="tag-addon"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="tag">
                                Two
                                <a href="#" class="tag-addon"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="tag">
                                Three
                                <a href="#" class="tag-addon"><i class="fa fa-times"></i></a>
                            </div>
                            <div class="tag">
                                Four
                                <a href="#" class="tag-addon"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="tag">
                            npm
                            <a href="#" class="tag-addon"><i class="fa fa-times"></i></a>
                        </div>
                        <div class="tag tag-danger">
                            npm
                            <span class="tag-addon"><i class="fa fa-chart-bar"></i></span>
                        </div>
                        <div class="tag">
                            bundle
                            <span class="tag-addon tag-success">passing</span>
                        </div>
                        <div class="tag tag-dark">
                            CSS gzip size
                            <div class="tag-addon tag-warning">20.9 kB</div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <div class="tag">
                            <a href="#" class="tag-prepend"><i class="fa fa-times"></i></a>
                            npm
                        </div>
                        <div class="tag tag-danger">
                            <span class="tag-prepend"><i class="fa fa-chart-bar"></i></span>
                            npm
                        </div>
                        <div class="tag">
                            <span class="tag-prepend tag-success">passing</span>
                            bundle
                        </div>
                        <div class="tag tag-dark">
                            <div class="tag-prepend tag-warning">20.9 kB</div>
                            CSS gzip size
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
