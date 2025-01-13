<?php
/**
 * Plugin Name: Local Jungle Masonry
 * Version: 1.0.0
 * Requires at least: 5.5
 * Requires PHP: 7.2
 * Description: Ability to turn a sections child elements into masonry layout.
 * Author: Local Jungle
 * Author URI: https://www.localjungle.com
 * Text Domain: ljmason
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//add_action( 'init', function () {
//	wp_enqueue_script( 'ljmasonry', plugins_url( 'flexmasonry.js', __FILE__ ) );
//} );

add_action( 'wp_footer', function () {
	?>
    <style>
        .masonry_gallery.wp-block-group-is-layout-constrained > * {
            margin-block-start: unset !important;
        }

        .masonry_gallery img {
            width: calc(100% - 10px);
            margin: 5px;
        }

        .header_phone a,
        .footer_phone a {
            text-decoration: none;
        }

        /*!
 * FlexMasonry
 * Version: 0.2.3
 * Author: Gilbert Pellegrom <gilbert@pellegrom.me>
 * License: MIT
 */
        .flexmasonry {
            display: flex;
            flex-flow: column wrap;
            align-content: space-between;
        }

        .flexmasonry-item {
            width: 100%;
        }

        .flexmasonry-cols-2 .flexmasonry-item {
            width: 50%;
        }

        .flexmasonry-cols-3 .flexmasonry-item {
            width: 33.333%;
        }

        .flexmasonry-cols-4 .flexmasonry-item {
            width: 25%;
        }

        .flexmasonry-cols-5 .flexmasonry-item {
            width: 20%;
        }

        .flexmasonry-cols-6 .flexmasonry-item {
            width: 16.666%;
        }

        .flexmasonry-cols-7 .flexmasonry-item {
            width: 14.285%;
        }

        .flexmasonry-cols-8 .flexmasonry-item {
            width: 12.5%;
        }

        .flexmasonry-cols-2 .flexmasonry-item:nth-child(2n+1) {
            order: 1;
        }

        .flexmasonry-cols-2 .flexmasonry-item:nth-child(2n) {
            order: 2;
        }

        .flexmasonry-cols-3 .flexmasonry-item:nth-child(3n+1) {
            order: 1;
        }

        .flexmasonry-cols-3 .flexmasonry-item:nth-child(3n+2) {
            order: 2;
        }

        .flexmasonry-cols-3 .flexmasonry-item:nth-child(3n) {
            order: 3;
        }

        .flexmasonry-cols-4 .flexmasonry-item:nth-child(4n+1) {
            order: 1;
        }

        .flexmasonry-cols-4 .flexmasonry-item:nth-child(4n+2) {
            order: 2;
        }

        .flexmasonry-cols-4 .flexmasonry-item:nth-child(4n+3) {
            order: 3;
        }

        .flexmasonry-cols-4 .flexmasonry-item:nth-child(4n) {
            order: 4;
        }

        .flexmasonry-cols-5 .flexmasonry-item:nth-child(5n+1) {
            order: 1;
        }

        .flexmasonry-cols-5 .flexmasonry-item:nth-child(5n+2) {
            order: 2;
        }

        .flexmasonry-cols-5 .flexmasonry-item:nth-child(5n+3) {
            order: 3;
        }

        .flexmasonry-cols-5 .flexmasonry-item:nth-child(5n+4) {
            order: 4;
        }

        .flexmasonry-cols-5 .flexmasonry-item:nth-child(5n) {
            order: 5;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n+1) {
            order: 1;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n+2) {
            order: 2;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n+3) {
            order: 3;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n+4) {
            order: 4;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n+5) {
            order: 5;
        }

        .flexmasonry-cols-6 .flexmasonry-item:nth-child(6n) {
            order: 6;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+1) {
            order: 1;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+2) {
            order: 2;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+3) {
            order: 3;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+4) {
            order: 4;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+5) {
            order: 5;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n+6) {
            order: 6;
        }

        .flexmasonry-cols-7 .flexmasonry-item:nth-child(7n) {
            order: 7;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+1) {
            order: 1;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+2) {
            order: 2;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+3) {
            order: 3;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+4) {
            order: 4;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+5) {
            order: 5;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+6) {
            order: 6;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n+7) {
            order: 7;
        }

        .flexmasonry-cols-8 .flexmasonry-item:nth-child(8n) {
            order: 8;
        }

        .flexmasonry-break {
            content: "";
            flex-basis: 100%;
            width: 0 !important;
            margin: 0;
        }

        .flexmasonry-break-1 {
            order: 1;
        }

        .flexmasonry-break-2 {
            order: 2;
        }

        .flexmasonry-break-3 {
            order: 3;
        }

        .flexmasonry-break-4 {
            order: 4;
        }

        .flexmasonry-break-5 {
            order: 5;
        }

        .flexmasonry-break-6 {
            order: 6;
        }

        .flexmasonry-break-7 {
            order: 7;
        }

        @media (max-width: 720px) {
            .hide_at_720 {
                display: none;
            }
        }

        @media (max-width: 400px) {

            .logo_background {
                display: flex;
                align-items: center;
            }

            .logo_background::before,
            .header_phone .wp-block-outermost-icon-block {
                display: none;
            }

            .header_top_bar,
            .header_bottom_bar {
                padding: 10px !important;
            }

            .header_top_bar {
                font-size: .8rem;
            }

            .logo_background > div {
                padding: 0 !important;
            }

            footer {
                padding-bottom: 70px;
            }

            .mobile_calls_to_action {
                display: block !important;
            }
        }
    </style>
    <script>
      /*!
	* FlexMasonry
	* Version: 0.2.3
	* Author: Gilbert Pellegrom <gilbert@pellegrom.me>
	* License: MIT
	*/
      let FlexMasonry = function (e) {
        var n = {};

        function t (r) {
          if (n[r]) return n[r].exports;
          var o = n[r] = { i: r, l: !1, exports: {} };
          return e[r].call(o.exports, o, o.exports, t), o.l = !0, o.exports;
        }

        return t.m = e, t.c = n, t.d = function (e, n, r) {
          t.o(e, n) || Object.defineProperty(e, n, {
            enumerable: !0,
            get: r
          });
        }, t.r = function (e) {'undefined' != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: 'Module' }), Object.defineProperty(e, '__esModule', { value: !0 });}, t.t = function (e, n) {
          if (1 & n && (e = t(e)), 8 & n) return e;
          if (4 & n && 'object' == typeof e && e && e.__esModule) return e;
          var r = Object.create(null);
          if (t.r(r), Object.defineProperty(r, 'default', {
            enumerable: !0,
            value: e
          }), 2 & n && 'string' != typeof e) for (var o in e) t.d(r, o, function (n) {return e[n];}.bind(null, o));
          return r;
        }, t.n = function (e) {
          var n = e && e.__esModule ? function () {return e.default;} : function () {return e;};
          return t.d(n, 'a', n), n;
        }, t.o = function (e, n) {return Object.prototype.hasOwnProperty.call(e, n);}, t.p = '', t(t.s = 0);
      }([function (e, n, t) {t(1), e.exports = t(2);}, function (e, n, t) {}, function (e, n, t) {
        'use strict';
        t.r(n);
        const r = {
          responsive: !0,
          breakpointCols: {
            'min-width: 1500px': 6,
            'min-width: 1200px': 5,
            'min-width: 992px': 4,
            'min-width: 768px': 3,
            'min-width: 576px': 2
          },
          numCols: 4
        };
        let o = null, i = {}, s = [];

        function a () {s.forEach(function (e) {c(e);});}

        function l () {o && window.cancelAnimationFrame(o), o = window.requestAnimationFrame(function () {y();});}

        function c (e) {
          if (d() < 2) return void e.style.removeProperty('height');
          let n = [];
          Array.from(e.children).forEach(function (e) {
            if (e.classList.contains('flexmasonry-break')) return;
            const t = window.getComputedStyle(e), r = t.getPropertyValue('order'), o = t.getPropertyValue('height');
            n[r - 1] || (n[r - 1] = 0), n[r - 1] += Math.ceil(parseFloat(o));
          });
          const t = Math.max(...n);
          e.style.height = t + 'px';
        }

        function f (e) {
          const n = e.querySelectorAll('.flexmasonry-break');
          if (Array.from(n).length !== d() - 1) for (let n = 1; n < d(); n++) {
            const t = document.createElement('div');
            t.classList.add('flexmasonry-break'), t.classList.add('flexmasonry-break-' + n), e.appendChild(t);
          }
        }

        function u (e) {e.classList.contains('flexmasonry-cols-' + d()) || (e.className = e.className.replace(/(flexmasonry-cols-\d+)/, ''), e.classList.add('flexmasonry-cols-' + d()));}

        function d () {
          if (!i.responsive) return i.numCols;
          const e = Object.keys(i.breakpointCols);
          for (const n of e) if (window.matchMedia('(' + n + ')').matches) return i.breakpointCols[n];
          return 1;
        }

        function m (e, n = {}) {
          return i = Object.assign(r, n), u(e), function (e) {
            const n = e.querySelectorAll('.flexmasonry-break');
            Array.from(n).length !== d() - 1 && Array.from(n).forEach(function (e) {e.parentNode.removeChild(e);});
          }(e), f(e), c(e), this;
        }

        function y (e = {}) {return s.forEach(function (n) {m(n, e);}), this;}

        n.default = {
          init: function (e, n = {}) {return s = 'string' == typeof e ? document.querySelectorAll(e) : e, i = Object.assign(r, n), s.forEach(function (e) {!function (e) {e.classList.add('flexmasonry'), i.responsive && e.classList.add('flexmasonry-responsive'), u(e), Array.from(e.children).forEach(function (e) {e.classList.add('flexmasonry-item');}), f(e);}(e), c(e);}), window.addEventListener('load', a), window.addEventListener('resize', l), this;},
          refresh: m,
          refreshAll: y,
          destroyAll: function () {window.removeEventListener('load', a), window.removeEventListener('resize', l);}
        };
      }]).default;

      // Masonry Gallery Style
      FlexMasonry.init('.masonry_gallery', {
        /*
		 * If `responsive` is `true`, `breakpointCols` will be used to determine
		 * how many columns a grid should have at a given responsive breakpoint.
		 */
        responsive: true,
        /*
		 * A list of how many columns should be shown at different responsive
		 * breakpoints, defined by media queries.
		 */
        breakpointCols: {
          'min-width: 600px': 3,
          // 'min-width: 1200px': 5,
          // 'min-width: 992px': 4,
          // 'min-width: 768px': 3,
          'min-width: 300px': 2,
        },
        /*
		 * If `responsive` is `false`, this number of columns will always be shown,
		 * no matter the width of the screen.
		 */
        numCols: 3,
      });
    </script>
	<?php
} );