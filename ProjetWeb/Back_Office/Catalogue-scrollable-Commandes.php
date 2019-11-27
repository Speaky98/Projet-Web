<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Scrollable Commandes - Add scrolling areas to any Commandes with custom scrollbars or default browser ones.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Add scrolling areas to any Commandes with custom scrollbars or default browser ones.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src" style="font-family: Poppins;font-size: 28px;color: black;">Prodigy</div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/12.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <form method="get" action="Session/logout.php">
                                            <button type="submit" tabindex="0" class="dropdown-item">Déconnecter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Salah Azzouz
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src" style="font-family: Poppins;font-size: 28px;color: black;">Prodigy</div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Tableau de bord</li>
                                <li>
                                    <a href="home.php">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Tableau de bord
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">VENDRE</li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Commandes
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    >
                                        <li>
                                            <a href="Commandes-buttons-standard.php">
                                                <i class="metismenu-icon"></i>
                                                Buttons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-dropdowns.php">
                                                <i class="metismenu-icon">
                                                </i>Dropdowns
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-icons.php">
                                                <i class="metismenu-icon">
                                                </i>Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-badges-labels.php">
                                                <i class="metismenu-icon">
                                                </i>Badges
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-cards.php">
                                                <i class="metismenu-icon">
                                                </i>Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-list-group.php">
                                                <i class="metismenu-icon">
                                                </i>List Groups
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-navigation.php">
                                                <i class="metismenu-icon">
                                                </i>Navigation Menus
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Commandes-utilities.php">
                                                <i class="metismenu-icon">
                                                </i>Utilities
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     class="mm-active"
                                    
                                >
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Catalogue
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                         class="mm-show"
                                        
                                    >
                                        <li>
                                            <a href="Catalogue-tabs.php">
                                                <i class="metismenu-icon">
                                                </i>Tabs
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-accordions.php">
                                                <i class="metismenu-icon">
                                                </i>Accordions
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-notifications.php">
                                                <i class="metismenu-icon">
                                                </i>Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-modals.php">
                                                <i class="metismenu-icon">
                                                </i>Modals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-progress-bar.php">
                                                <i class="metismenu-icon">
                                                </i>Progress Bar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-tooltips-popovers.php">
                                                <i class="metismenu-icon">
                                                </i>Tooltips &amp; Popovers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-carousel.php">
                                                <i class="metismenu-icon">
                                                </i>Carousel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-calendar.php">
                                                <i class="metismenu-icon">
                                                </i>Calendar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-pagination.php">
                                                <i class="metismenu-icon">
                                                </i>Pagination
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-scrollable-Commandes.php" class="mm-active">
                                                <i class="metismenu-icon">
                                                </i>Scrollable
                                            </a>
                                        </li>
                                        <li>
                                            <a href="Catalogue-maps.php">
                                                <i class="metismenu-icon">
                                                </i>Maps
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li  >
                                    <a href="tables-regular.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Tables
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Widgets</li>
                                <li>
                                    <a href="dashboard-boxes.php">
                                        <i class="metismenu-icon pe-7s-display2"></i>
                                        Dashboard Boxes
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Forms</li>
                                <li>
                                    <a href="forms-controls.php">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>Forms Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.php">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Forms Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.php">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Forms Validation
                                    </a>
                                </li>
                                
                                <li class="app-sidebar__heading">PERSONNALISER</li>

                                <li





                                >
                                <a href="#" >
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Livraison
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <li>
                                        <a href="Commandes-buttons-standard.php">
                                            <i class="metismenu-icon"></i>
                                            Transporteurs
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-radio icon-gradient bg-strong-bliss">
                                        </i>
                                    </div>
                                    <div>Scrollable Commandes
                                        <div class="page-title-subheading">Add scrolling areas to any Commandes with custom scrollbars or default browser ones.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Inbox
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span>
                                                            Book
                                                        </span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span>
                                                            Picture
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span>
                                                            File Disabled
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <div class="row">
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Medium Scrollable Area</h5>
                                        <div class="scroll-area-md">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Large Scrollable Area</h5>
                                        <div class="scroll-area-lg">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Small Scrollable Area</h5>
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-card mb-3 card">
                                    <div class="card-header">
                                        <i class="header-icon lnr-laptop-phone icon-gradient bg-plum-plate"> </i>
                                        Header Menu
                                        <div class="btn-actions-pane-right actions-icon-btn">
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-leaf btn-icon-wrapper"></i></button>
                                            <button class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-cloud-download btn-icon-wrapper"></i></button>
                                            <div class="btn-group">
                                                <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link"><i class="pe-7s-menu btn-icon-wrapper"></i></button>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"><h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox"> </i><span>Menus</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span></button>
                                                    <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book"> </i><span>Actions</span></button>
                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                    <div class="p-3 text-right">
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps--active-y"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sodales ullamcorper vehicula. Duis placerat quam porta lorem lobortis, sit amet sodales mauris
                                                finibus. Donec posuere diam at volutpat viverra. Cras fringilla auctor augue sed congue. Maecenas mollis quis enim quis egestas. In sollicitudin mi a pretium varius. Integer eleifend sodales pharetra. Nullam vitae
                                                libero sem. Nulla et eros congue, tincidunt ante eu, tincidunt eros. Donec nisl purus, convallis a hendrerit ut, eleifend in lectus. Proin luctus dignissim lacus, in laoreet arcu eleifend non. Quisque viverra ipsum
                                                a massa porta convallis. Donec tincidunt imperdiet purus, interdum elementum ante commodo a. Quisque pharetra arcu sapien, vel ornare magna sollicitudin quis.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                                <p>Nunc congue magna eget eros blandit, eu viverra magna semper. Nullam in diam a metus dictum consequat. Quisque ultricies, ipsum non euismod semper, velit felis lacinia nibh, et finibus quam leo vitae nisi.
                                                    Maecenas interdum diam quis risus bibendum, eu fermentum est pharetra. In dictum at enim pretium bibendum. Praesent efficitur iaculis dolor in sodales. Morbi maximus in ipsum in malesuada. Proin semper lacus
                                                    tempor magna aliquam, sed aliquam dui scelerisque. Donec nisi nulla, rhoncus a tristique eget, ultrices vitae dolor. Ut id urna vitae ante tincidunt pharetra at non metus. Nunc in suscipit nulla. Sed vitae leo
                                                    vulputate, euismod tortor vel, aliquet velit. Curabitur eget tincidunt elit. Nam et ligula finibus, eleifend velit et, commodo quam. Praesent non libero velit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-block text-right card-footer">
                                        <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                        <button class="btn btn-success btn-lg">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
