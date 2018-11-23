initMap = !1,
    function(e) {
        if ("undefined" == typeof jQuery) throw "Requires jQuery to be loaded first";
        e(jQuery)
    }(function(e) {
        "use strict";
        e("body").addClass("loader-loading");
        var t = function() {
            e("body").removeClass("loader-loading").off(".pageLoader"), e(window).trigger("resize")
        };
        e(window).on("load.pageLoader", t), setTimeout(t, 6e4), e("body").pexInit(), e(".menu-items .toggle-icon").on("click", function() {
            e(this).closest("li").toggleClass("active")
        }), e(".accordion-item .accordion-title").on("click", function() {
            e(this).closest(".accordion-item").toggleClass("active")
        }), e("[data-parallax]").each(function(t, i) {
            new Waypoint({
                element: i,
                handler: function() {
                    e(window).resize()
                },
                offset: "100%"
            })
        }), e(".flexslider").each(function(t, i) {
            var l = e(i),
                o = l.find(".flex-custom-navigation a"),
                a = l.find(".flex-custom-controls"),
                n = {
                    animation: "slide",
                    selector: ".slides > .slide",
                    controlsContainer: a,
                    customDirectionNav: o,
                    controlNav: !!a.length,
                    directionNav: !!o.length,
                    video: !0
                };
            l.flexslider(n)
        }), e(".owl-carousel").each(function(t, i) {
            var l = e(i),
                o = l.data(),
                a = {
                    nav: !!o.owlNav,
                    dots: !!o.owlDots,
                    margin: o.owlMargin || 0,
                    autoplay: !o.hasOwnProperty("autoplay") || o.autoplay,
                    autoplayHoverPause: !0,
                    center: !!o.owlCenter,
                    items: o.owlItems || 3,
                    loop: !o.hasOwnProperty("owlLoop") || !!o.owlLoop,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        }
                    }
                };
            if (o.owlResponsive) {
                for (var n = o.owlResponsive.split(";"), s = {
                        0: 1
                    }, r = [0, 768, 992, 1200], c = 0; c < r.length && c < n.length; c++) n[c] && (s[r[c]] = {
                    items: parseInt(n[c], 10)
                });
                a.responsive = s
            }
            l.owlCarousel(a)
        }), e("[data-waypoint-counter]").each(function(t, i) {
            e(i).waypoint({
                handler: function() {
                    e(i).prop("CounterValue", 0).animate({
                        CounterValue: e(i).data("waypointCounter")
                    }, {
                        duration: 2e3,
                        step: function(t) {
                            e(this).text(Math.ceil(t))
                        }
                    }), this.destroy()
                },
                offset: "bottom-in-view"
            })
        }), e(".stick-menu").each(function(t, i) {
            var l, o;
            l = new Waypoint({
                element: e(i).closest(".header")[0],
                handler: function() {
                    e(window).scrollTop() <= this.element.clientHeight && (e(i).closest(".header").removeClass("sticked-menu"), e(window).resize(), this.disable(), o.enable())
                },
                enabled: !1,
                offset: function() {
                    return -this.element.clientHeight - 1
                }
            }), o = new Waypoint({
                element: i,
                handler: function() {
                    var t = document.body,
                        o = document.documentElement,
                        a = Math.max(t.scrollHeight, t.offsetHeight, o.clientHeight, o.scrollHeight, o.offsetHeight),
                        n = this.element.clientHeight;
                    a > e(window).height() + 2 * n && (e(i).closest(".header").addClass("sticked-menu"), e(window).resize(), this.disable(), l.enable())
                },
                offset: -2
            })
        }), e(".field-file-control").each(function(t, i) {
            var l = e(i);
            l.on("change.fileField", function() {
                var t = e(this).closest(".field-wrap"),
                    i = t.find(".field-file-old");
                t.find(".field-control").val(!this.value && i.length ? i.attr("data-value") || i.val() : this.value)
            }).triggerHandler("change.fileField");
            var o = l.closest("form");
            o && o.length && o.data("fileFields", (o.data("fileFields") || e([])).add(l)).off(".fileFields").on("reset.fileFields", function() {
                var t = e(this);
                setTimeout(function() {
                    t.data("fileFields").each(function(t, i) {
                        e(i).triggerHandler("change.fileField")
                    })
                })
            }), l.closest(".field-wrap").find(".field-control, .field-file-btn").on("click", function(e) {
                e.preventDefault(), l.trigger("click")
            });
            var a = !1,
                n = e(i).closest(".field-type-image");
            n.length && "undefined" != typeof FileReader && (n.find(".file-preview-image img") && n.addClass("has-file"), n.find(".file-preview").on("click", function(e) {
                e.preventDefault(), l.trigger("click")
            }), (a = new FileReader).onloadstart = function() {
                n.removeClass("has-file")
            }, a.onload = function(e) {
                n.find(".file-preview-image").empty().html('<img src="' + e.target.result + '" alt="" />'), n.addClass("has-file")
            }, l.on("change.imageField", function() {
                var e = this.files ? this.files : this.currentTarget.files;
                e.length ? a.readAsDataURL(e[0]) : n.removeClass("has-file").find(".file-preview-image").empty()
            }), o && o.length && o.data("imageFields", (o.data("imageFields") || e([])).add(l)).off(".imageFields").on("reset.imageFields", function() {
                var t = e(this);
                setTimeout(function() {
                    t.data("imageFields").each(function(t, i) {
                        e(i).find('input[type="file"]').triggerHandler("change.imageField")
                    })
                })
            }))
        }), e("[data-inview-showup]").each(function() {
            var t = e(this);
            t.addClass("inview-showup"), new Waypoint({
                element: t,
                handler: function() {
                    t.removeClass("inview-showup");
                    var e = t.data("inviewShowup");
                    e && t.addClass(e), this.destroy()
                },
                offset: "100%",
                group: "inview"
            })
        }), e(".shuffle-js").each(function(t, i) {
            var l = e(i),
                o = e(i).find(".shuffle-items"),
                a = new Shuffle(o[0], {
                    itemSelector: ".shuffle-item"
                }),
                n = l.find("[data-filter]");
            n.on("click", function(t) {
                t.preventDefault(), l.find(".shuffle-empty").css("display", "none");
                var i, o = e(this);
                try {
                    i = JSON.parse(o.data("filter"))
                } catch (e) {
                    i = o.data("filter")
                }
                n.removeClass("active"), o.addClass("active"), a.filter(i)
            }), a.on(Shuffle.EventType.LAYOUT, function() {
                e(window).trigger("resize"), l.find(".shuffle-empty").css("display", a.visibleItems ? "none" : "block")
            })
        });
        var i = ["min", "max"],
            l = function(t, i) {
                t.each(function(t, l) {
                    var o = e(l);
                    o.is("input, textarea, select") ? o.val(i) : o.html(i)
                })
            };
        e("[data-ui-range-slider]").each(function(t, o) {
            for (var a = e(o), n = a.find(".slider-container"), s = a.find("[data-slider-from]"), r = a.find("[data-slider-to]"), c = a.data(), f = {
                    range: !0,
                    values: [s.filter("input").first().val() || c.from || c.min || 0, r.filter("input").first().val() || c.to || c.max || 0],
                    create: function() {
                        l(s, f.values[0]), l(r, f.values[1])
                    },
                    slide: function(e, t) {
                        l(s, t.values[0]), l(r, t.values[1])
                    }
                }, d = 0; d < i.length; d++) c.hasOwnProperty(i[d]) && (f[i[d]] = c[i[d]]);
            n.slider(f)
        }), e("[data-preview-image]").each(function(t, i) {
            var l = e(i),
                o = e([]),
                a = e([]),
                n = l.data("previewImage") || "";
            e('[data-preview-image-source="' + n + '"]').on("mouseenter.previewImage", function() {
                var t = e(this);
                o.is(t) || (a.clearQueue().fadeOut(500, function() {
                    e(this).remove()
                }), o = t, a = t.clone(!0, !0).removeClass().off(".previewImage").css({
                    display: "none",
                    transition: "none"
                }).appendTo(l).fadeIn(500))
            }).first().triggerHandler("mouseenter")
        });
        var o = function() {
            e(window).scrollTop() > 0 ? e(".scroll-top").removeClass("disabled") : e(".scroll-top").addClass("disabled")
        };
        o(), e(window).on("scroll resize orientationchange focus", o), e(".scroll-top").on("click", function(t) {
            t.preventDefault(), e("html, body").animate({
                scrollTop: 0
            }, 1e3)
        }), e("ul.categories-list > li .open-sub-link").on("click", function(t) {
            t.preventDefault();
            var i = e(this).closest("li").toggleClass("active"),
                l = i.hasClass("active") ? i : e([]);
            i.closest("ul").find("> li.active").not(l).removeClass("active")
        }), initMap = function() {
            var t = new google.maps.StyledMapType([{
                elementType: "geometry",
                stylers: [{
                    color: "#f5f5f5"
                }]
            }, {
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#616161"
                }]
            }, {
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#f5f5f5"
                }]
            }, {
                featureType: "administrative.land_parcel",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#bdbdbd"
                }]
            }, {
                featureType: "poi",
                elementType: "geometry",
                stylers: [{
                    color: "#eeeeee"
                }]
            }, {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#757575"
                }]
            }, {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{
                    color: "#e5e5e5"
                }]
            }, {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    color: "#ffffff"
                }]
            }, {
                featureType: "road.arterial",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#757575"
                }]
            }, {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{
                    color: "#dadada"
                }]
            }, {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#616161"
                }]
            }, {
                featureType: "road.local",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            }, {
                featureType: "transit.line",
                elementType: "geometry",
                stylers: [{
                    color: "#e5e5e5"
                }]
            }, {
                featureType: "transit.station",
                elementType: "geometry",
                stylers: [{
                    color: "#eeeeee"
                }]
            }, {
                featureType: "water",
                elementType: "geometry",
                stylers: [{
                    color: "#c9c9c9"
                }]
            }, {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#9e9e9e"
                }]
            }], {
                name: "Styled Map"
            });
            e(".gmap").each(function(i, l) {
                var o = e(l).data(),
                    a = {
                        lat: o.lat,
                        lng: o.lng
                    },
                    n = {
                        lat: o.centerLat || a.lat - .00,
                        lng: o.centerLng || a.lng + .001
                    },
                    s = new google.maps.Map(l, {
                        center: n,
                        zoom: o.zoom || 18,
                        scrollwheel: !1,
                        zoomControl: !0,
                        zoomControlOptions: {
                            position: google.maps.ControlPosition.LEFT_CENTER
                        },
                        streetViewControl: !0,
                        streetViewControlOptions: {
                            position: google.maps.ControlPosition.LEFT_BOTTOM
                        },
                        mapTypeControlOptions: {
                            mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "styled_map"]
                        }
                    });
                new google.maps.Marker({
                    position: a,
                    map: s,
                    icon: o.marker || "./images/parts/map-marker.png"
                }), s.mapTypes.set("styled_map", t), s.setMapTypeId("styled_map"), e(window).on("resize", function() {
                    google.maps.event.trigger(s, "resize"), s.setCenter(n)
                })
            })
        }, e(".chosen-field select.field-control").each(function(t, i) {
            e(i).chosen({
                width: "100%",
                disable_search_threshold: 10
            })
        }), e(".user-tickets .user-ticket .item-header").on("click", function(t) {
            t.preventDefault();
            var i = e(this).closest(".user-ticket"),
                l = e(this).closest(".user-tickets").find(".user-ticket").not(i);
            i.toggleClass("active"), l.removeClass("active")
        }), e(".user-orders .user-order .item-header").on("click", function(t) {
            t.preventDefault();
            var i = e(this).closest(".user-order"),
                l = e(this).closest(".user-orders").find(".user-order").not(i);
            i.toggleClass("active"), l.removeClass("active")
        })
    });