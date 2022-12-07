/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
$(document).ready(function() {
    $(".blog-slider").owlCarousel({
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 1],
        itemsMobile: [479, 1],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-angle-left'></i></div>", "<div class='next-arrow'><i class='fa fa-angle-right'></div>"],
        navigation: true
    });
    $(".product-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [767, 2],
        itemsTabletSmall: [639, 2],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-angle-left'></i></div>", "<div class='next-arrow'><i class='fa fa-angle-right'></div>"],
        navigation: true
    });
    $(".extension-slider").owlCarousel({
        autoPlay: true,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [991, 1],
        itemsTablet: [767, 1],
        itemsTabletSmall: [639, 1],
        itemsMobile: [479, 1],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-angle-left'></i></div>", "<div class='next-arrow'><i class='fa fa-angle-right'></div>"],
        navigation: false
    });
    $(".brands-slider").owlCarousel({
        autoPlay: true,
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [991, 4],
        itemsTablet: [767, 4],
        itemsTabletSmall: [639, 3],
        itemsMobile: [479, 2],
        pagination: false,
        navigationText: ["<div class='prev-arrow'><i class='fa fa-angle-left'></i></div>", "<div class='next-arrow'><i class='fa fa-angle-right'></div>"],
        navigation: true
    });
});
$(document).ready(function() {
    $('.show_list').click(function() {
        $('#js-product-list div.product-item').addClass('list-view');
        $(this).addClass('active');
        $('.show_grid').removeClass('active');
    });
    $('.show_grid').click(function() {
        $('#js-product-list div.product-item').removeClass('list-view');
        $(this).addClass('active');
        $('.show_list').removeClass('active');
    });
});
$(document).ready(function() {
    if (jQuery(window).width() <= 767) {
        $(".footer-block-title").click(function() {
            $(this).toggleClass('active-tab');
            $(".footer-block-toggle-content").toggle();
        });
    }
});
$(document).ready(function () {
    $('#menu-icon').on('click', function () {
        if ($('#mobile_top_menu_wrapper').is(':visible')) {
            $('#notifications, #wrapper, #footer').show();
        }
    });
});