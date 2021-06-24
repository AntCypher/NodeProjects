(window["webpackJsonptf-react-chester"] = window["webpackJsonptf-react-chester"] || []).push([
    [0], {
        103: function(e, t, a) {},
        104: function(e, t, a) {},
        262: function(e, t) {},
        281: function(e, t, a) {
            var l = {
                "./boost-your-post-for-increasing-sales.md": 282,
                "./difference-between-gatsbyjs-and-nextjs.md": 283,
                "./future-of-javascript.md": 284,
                "./how-to-choose-javascript-framework-for-project.md": 285,
                "./how-to-get-10k-instagram-followers.md": 286,
                "./installing-nodejs-on-your-device.md": 287,
                "./markdown-html-supported-blog.md": 288,
                "./popular-javascript-library-in-2020.md": 289,
                "./programmers-must-read-books.md": 290,
                "./think-out-of-the-box.md": 291,
                "./time-to-use-latest-technology-for-creating-a-website.md": 292,
                "./trending-designs-in-2020.md": 293,
                "./uiux-design-starter-with-adobe-xd.md": 294,
                "./web-automation-with-python-language.md": 295,
                "./what-nodejs-can-do.md": 296
            };

            function n(e) {
                var t = i(e);
                return a(t)
            }

            function i(e) {
                if (!a.o(l, e)) {
                    var t = new Error("Cannot find module '" + e + "'");
                    throw t.code = "MODULE_NOT_FOUND", t
                }
                return l[e]
            }
            n.keys = function() {
                return Object.keys(l)
            }, n.resolve = i, e.exports = n, n.id = 281
        },
        282: function(e, t, a) {
            e.exports = a.p + "static/media/boost-your-post-for-increasing-sales.40703f06.md"
        },
        283: function(e, t, a) {
            e.exports = a.p + "static/media/difference-between-gatsbyjs-and-nextjs.50690707.md"
        },
        284: function(e, t, a) {
            e.exports = a.p + "static/media/future-of-javascript.8df14a54.md"
        },
        285: function(e, t, a) {
            e.exports = a.p + "static/media/how-to-choose-javascript-framework-for-project.0936e963.md"
        },
        286: function(e, t, a) {
            e.exports = a.p + "static/media/how-to-get-10k-instagram-followers.7e2c3fc5.md"
        },
        287: function(e, t, a) {
            e.exports = a.p + "static/media/installing-nodejs-on-your-device.c1670556.md"
        },
        288: function(e, t, a) {
            e.exports = a.p + "static/media/markdown-html-supported-blog.ab93b649.md"
        },
        289: function(e, t, a) {
            e.exports = a.p + "static/media/popular-javascript-library-in-2020.fd4b6a65.md"
        },
        290: function(e, t, a) {
            e.exports = a.p + "static/media/programmers-must-read-books.5aacfc9b.md"
        },
        291: function(e, t, a) {
            e.exports = a.p + "static/media/think-out-of-the-box.10de7bfb.md"
        },
        292: function(e, t, a) {
            e.exports = a.p + "static/media/time-to-use-latest-technology-for-creating-a-website.cfac748a.md"
        },
        293: function(e, t, a) {
            e.exports = a.p + "static/media/trending-designs-in-2020.73bbfaad.md"
        },
        294: function(e, t, a) {
            e.exports = a.p + "static/media/uiux-design-starter-with-adobe-xd.05dd671b.md"
        },
        295: function(e, t, a) {
            e.exports = a.p + "static/media/web-automation-with-python-language.7446eedb.md"
        },
        296: function(e, t, a) {
            e.exports = a.p + "static/media/what-nodejs-can-do.4d1fc5bd.md"
        },
        304: function(e, t, a) {
            "use strict";
            a.r(t);
            var l = a(0),
                n = a.n(l),
                i = a(29),
                r = a.n(i),
                o = (a(100), a(101), a(102), a(103), a(2)),
                c = a(310),
                m = a(8),
                s = a(4),
                u = (a(104), a(7)),
                g = a(3),
                d = a.n(g),
                p = a(30),
                f = a.n(p),
                b = a(305),
                E = a(20),
                h = a.n(E),
                v = a(89),
                j = a.n(v);
            var N = function(e) {
                    return n.a.createElement("div", {
                        className: "mi-bglines"
                    }, n.a.createElement("span", null), n.a.createElement("span", null), n.a.createElement("span", null), n.a.createElement("span", null), n.a.createElement("span", null))
                },
                y = a(6),
                w = a.n(y);
            var k = function() {
                var e = Object(l.useState)(""),
                    t = Object(o.a)(e, 2),
                    a = t[0],
                    i = t[1],
                    r = Object(l.useState)(!1),
                    c = Object(o.a)(r, 2),
                    s = c[0],
                    u = c[1];
                return Object(l.useEffect)((function() {
                    d.a.get("/api/information").then((function(e) {
                        i(e.data)
                    }))
                }), []), n.a.createElement("nav", {
                    className: s ? "mi-header is-visible" : "mi-header"
                }, n.a.createElement("button", {
                    onClick: function() {
                        u(!s)
                    },
                    className: "mi-header-toggler"
                }, s ? n.a.createElement(w.a, {
                    name: "close"
                }) : n.a.createElement(w.a, {
                    name: "menu"
                })), n.a.createElement("div", {
                    className: "mi-header-inner"
                }, n.a.createElement("div", {
                    className: "mi-header-image"
                }, n.a.createElement(m.b, {
                    to: "/"
                }, n.a.createElement("img", {
                    src: a.brandImage,
                    alt: "brandimage"
                }))), n.a.createElement("ul", {
                    className: "mi-header-menu"
                }, n.a.createElement("li", null, n.a.createElement(m.c, {
                    exact: !0,
                    to: "/"
                }, n.a.createElement("span", null, "Home"))), n.a.createElement("li", null, n.a.createElement(m.c, {
                    to: "/about"
                }, n.a.createElement("span", null, "About"))), n.a.createElement("li", null, n.a.createElement(m.c, {
                    to: "/resume"
                }, n.a.createElement("span", null, "Resume"))), n.a.createElement("li", null, n.a.createElement(m.c, {
                    to: "/portfolios"
                }, n.a.createElement("span", null, "Portfolios"))), n.a.createElement("li", null, n.a.createElement(m.c, {
                    to: "/blogs"
                }, n.a.createElement("span", null, "Blogs"))), n.a.createElement("li", null, n.a.createElement(m.c, {
                    to: "/contact"
                }, n.a.createElement("span", null, "Contact")))), n.a.createElement("p", {
                    className: "mi-header-copyright"
                }, "\xa9 ", (new Date).getFullYear(), " ", n.a.createElement("b", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: "https://nuclearthemes.com"
                }, "NuclearThemes")))))
            };
            var O = function(e) {
                return n.a.createElement("div", {
                    className: "mi-wrapper"
                }, n.a.createElement(N, null), n.a.createElement(k, null), e.children)
            };
            var P = function(e) {
                return n.a.createElement("div", {
                    className: "mi-sectiontitle"
                }, n.a.createElement("h2", null, e.title), n.a.createElement("span", null, e.title))
            };
            var x = function(e) {
                return n.a.createElement("div", {
                    className: "mi-service"
                }, n.a.createElement("span", {
                    className: "mi-service-icon"
                }, n.a.createElement(w.a, {
                    name: e.content.icon
                })), n.a.createElement("h5", null, e.content.title), n.a.createElement("p", null, e.content.details))
            };
            var I = function(e) {
                return n.a.createElement("div", {
                    className: "mi-testimonial-slideritem"
                }, n.a.createElement("div", {
                    className: "mi-testimonial"
                }, n.a.createElement("div", {
                    className: "mi-testimonial-content"
                }, n.a.createElement("p", null, e.content.content)), n.a.createElement("div", {
                    className: "mi-testimonial-author"
                }, n.a.createElement("h5", null, e.content.author.name), n.a.createElement("h6", null, e.content.author.designation))))
            };
            var S = function() {
                    var e = Object(l.useState)(!1),
                        t = Object(o.a)(e, 2),
                        a = t[0],
                        i = t[1],
                        r = Object(l.useState)(""),
                        c = Object(o.a)(r, 2),
                        m = c[0],
                        s = c[1],
                        g = Object(l.useState)([]),
                        p = Object(o.a)(g, 2),
                        E = p[0],
                        v = p[1],
                        N = Object(l.useState)([]),
                        y = Object(o.a)(N, 2),
                        w = y[0],
                        k = y[1];
                    return Object(l.useEffect)((function() {
                        d.a.get("/api/information").then((function(e) {
                            s(e.data)
                        })), d.a.get("/api/services").then((function(e) {
                            v(e.data)
                        })), d.a.get("/api/reviews").then((function(e) {
                            k(e.data)
                        }))
                    }), []), n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "About - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                        name: "description",
                        content: "Chester React Personal Portfolio Template About Page"
                    })), n.a.createElement("div", {
                        className: "mi-about-area mi-section mi-padding-top"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "About Me"
                    }), n.a.createElement("div", {
                        className: "row"
                    }, n.a.createElement("div", {
                        className: "col-lg-6"
                    }, n.a.createElement("div", {
                        className: "mi-about-image"
                    }, n.a.createElement(h.a, {
                        src: m.aboutImage,
                        placeholder: "/images/about-image-placeholder.png"
                    }, (function(e) {
                        return n.a.createElement("img", {
                            src: e,
                            alt: "aboutimage",
                            onClick: function() {
                                i({
                                    toggler: !a
                                })
                            }
                        })
                    })), n.a.createElement("span", {
                        className: "mi-about-image-icon"
                    }, n.a.createElement(b.a, null)), n.a.createElement(f.a, {
                        toggler: a,
                        sources: [m.aboutImageLg]
                    }))), n.a.createElement("div", {
                        className: "col-lg-6"
                    }, n.a.createElement("div", {
                        className: "mi-about-content"
                    }, n.a.createElement("h3", null, "I am ", n.a.createElement("span", {
                        className: "color-theme"
                    }, m.name)), n.a.createElement("p", null, "I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations."), n.a.createElement("ul", null, m.name ? n.a.createElement("li", null, n.a.createElement("b", null, "Full Name"), " ", m.name) : null, m.age ? n.a.createElement("li", null, n.a.createElement("b", null, "Age"), " ", m.age, " Years") : null, m.phone ? n.a.createElement("li", null, n.a.createElement("b", null, "Phone"), " ", m.phone) : null, m.nationality ? n.a.createElement("li", null, n.a.createElement("b", null, "Nationality"), " ", m.nationality) : null, m.language ? n.a.createElement("li", null, n.a.createElement("b", null, "Languages"), " ", m.language) : null, m.email ? n.a.createElement("li", null, n.a.createElement("b", null, "Email"), " ", m.email) : null, m.address ? n.a.createElement("li", null, n.a.createElement("b", null, "Address"), " ", m.address) : null, m.freelanceStatus ? n.a.createElement("li", null, n.a.createElement("b", null, "Freelance"), " ", m.freelanceStatus) : null), n.a.createElement("a", {
                        href: m.cvfile,
                        className: "mi-button"
                    }, "Download CV")))))), n.a.createElement("div", {
                        className: "mi-service-area mi-section mi-padding-top"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "Services"
                    }), n.a.createElement("div", {
                        className: "mi-service-wrapper"
                    }, n.a.createElement("div", {
                        className: "row mt-30-reverse"
                    }, E.map((function(e) {
                        return n.a.createElement("div", {
                            className: "col-lg-4 col-md-6 col-12 mt-30",
                            key: e.title
                        }, n.a.createElement(x, {
                            content: e
                        }))
                    })))))), n.a.createElement("div", {
                        className: "mi-review-area mi-section mi-padding-top mi-padding-bottom"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "Reviews"
                    }), n.a.createElement("div", {
                        className: "row justify-content-center"
                    }, n.a.createElement("div", {
                        className: "col-12"
                    }, n.a.createElement(j.a, Object.assign({
                        className: "mi-testimonial-slider"
                    }, {
                        dots: !1,
                        infinite: !0,
                        arrows: !1,
                        speed: 500,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay: !0,
                        autoplaySpeed: 6e3,
                        pauseOnHover: !0,
                        adaptiveHeight: !0,
                        responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }]
                    }), w.map((function(e) {
                        return n.a.createElement(I, {
                            key: e.id,
                            content: e
                        })
                    }))))))))
                },
                C = a(91),
                M = a.n(C),
                U = a(92),
                D = a.n(U);
            var T = function(e) {
                var t = Object(l.useState)(""),
                    i = Object(o.a)(t, 2),
                    r = i[0],
                    c = i[1],
                    m = e.match.params.id,
                    s = e.match.params.title;
                Object(l.useEffect)((function() {
                    d.a.get(a(281)("./".concat(s, ".md"))).then((function(e) {
                        c(e.data)
                    }))
                }), [r, s]);
                var g = {
                    url: "https://tf-react-chester.now.sh/",
                    identifier: m,
                    title: s
                };
                return n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Blog Details - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                    name: "description",
                    content: "Chester React Personal Portfolio Template Blog Details Page"
                })), n.a.createElement("div", {
                    className: "mi-blog-details mi-section mi-padding-top mi-padding-bottom"
                }, n.a.createElement("div", {
                    className: "container"
                }, n.a.createElement(D.a, {
                    source: r,
                    escapeHtml: !1
                }), n.a.createElement("div", {
                    className: "mi-blog-details-comments mt-30"
                }, n.a.createElement(M.a.DiscussionEmbed, {
                    shortname: "chester-react",
                    config: g
                })))))
            };
            var A = function(e) {
                var t = e.data,
                    a = t.id,
                    l = t.featuredImage,
                    i = t.title,
                    r = t.createDay,
                    o = t.createMonth,
                    c = t.filesource,
                    s = function(e) {
                        var t = e.split("/");
                        return t[t.length - 1].slice(0, -3)
                    };
                return n.a.createElement("div", {
                    className: "mi-blog"
                }, n.a.createElement("div", {
                    className: "mi-blog-image"
                }, n.a.createElement(m.b, {
                    to: "blogs/blog-details/".concat(a, "/").concat(s(c))
                }, n.a.createElement(h.a, {
                    src: l,
                    placeholder: "/images/blog-image-placeholder.png"
                }, (function(e) {
                    return n.a.createElement("img", {
                        src: e,
                        alt: i
                    })
                }))), n.a.createElement("div", {
                    className: "mi-blog-date"
                }, n.a.createElement("span", {
                    className: "date"
                }, r), n.a.createElement("span", {
                    className: "month"
                }, o.slice(0, 3)))), n.a.createElement("div", {
                    className: "mi-blog-content"
                }, n.a.createElement("h5", null, n.a.createElement(m.b, {
                    to: "blogs/blog-details/".concat(a, "/").concat(s(c))
                }, i))))
            };
            var F = function(e) {
                var t = e.blogs;
                return n.a.createElement("div", {
                    className: "row mt-30-reverse"
                }, t.map((function(e) {
                    return n.a.createElement("div", {
                        className: "col-lg-6 col-md-6 col-12 mt-30",
                        key: e.id
                    }, n.a.createElement(A, {
                        data: e
                    }))
                })))
            };
            var q = function(e) {
                for (var t = e.itemsPerPage, a = e.totalItems, l = e.paginate, i = e.currentPage, r = e.className, o = [], c = 1; c <= Math.ceil(a / t); c++) o.push(c);
                return n.a.createElement("div", {
                    className: r ? "mi-pagination " + r : "mi-pagination"
                }, n.a.createElement("ul", null, 1 === i ? null : n.a.createElement("li", null, n.a.createElement("a", {
                    onClick: function(e) {
                        return l(e, i - 1)
                    },
                    href: "!#"
                }, n.a.createElement(w.a, {
                    name: "chevron-left"
                }))), o.map((function(e) {
                    return n.a.createElement("li", {
                        key: e,
                        className: i === e ? "is-active" : null
                    }, n.a.createElement("a", {
                        onClick: function(t) {
                            return l(t, e)
                        },
                        href: "!#"
                    }, e))
                })), i === o[o.length - 1] ? null : n.a.createElement("li", null, n.a.createElement("a", {
                    onClick: function(e) {
                        return l(e, i + 1)
                    },
                    href: "!#"
                }, n.a.createElement(w.a, {
                    name: "chevron-right"
                })))))
            };
            var L = function() {
                    var e = Object(l.useState)([]),
                        t = Object(o.a)(e, 2),
                        a = t[0],
                        i = t[1],
                        r = Object(l.useState)(1),
                        c = Object(o.a)(r, 2),
                        m = c[0],
                        s = c[1],
                        g = Object(l.useState)(6),
                        p = Object(o.a)(g, 1)[0];
                    Object(l.useEffect)((function() {
                        var e = !0;
                        return d.a.get("/api/blog").then((function(t) {
                                e && i(t.data)
                            })),
                            function() {
                                return e = !1
                            }
                    }), [a]);
                    var f = m * p,
                        b = f - p,
                        E = a.slice(b, f);
                    return n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Blogs - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                        name: "description",
                        content: "Chester React Personal Portfolio Template Blogs Page"
                    })), n.a.createElement("div", {
                        className: "mi-about mi-section mi-padding-top mi-padding-bottom"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "Recent Blogs"
                    }), n.a.createElement(F, {
                        blogs: E
                    }), a.length > p ? n.a.createElement(q, {
                        className: "mt-50",
                        itemsPerPage: p,
                        totalItems: a.length,
                        paginate: function(e, t) {
                            e.preventDefault(), s(t)
                        },
                        currentPage: m
                    }) : null)))
                },
                R = a(31),
                B = a(52),
                Y = a(306),
                _ = a(307),
                H = a(308);
            var W = function() {
                    var e = Object(l.useState)([]),
                        t = Object(o.a)(e, 2),
                        a = t[0],
                        i = t[1],
                        r = Object(l.useState)([]),
                        c = Object(o.a)(r, 2),
                        m = c[0],
                        s = c[1],
                        g = Object(l.useState)([]),
                        p = Object(o.a)(g, 2),
                        f = p[0],
                        b = p[1],
                        E = Object(l.useState)({
                            name: "",
                            email: "",
                            subject: "",
                            message: ""
                        }),
                        h = Object(o.a)(E, 2),
                        v = h[0],
                        j = h[1],
                        N = Object(l.useState)(!1),
                        y = Object(o.a)(N, 2),
                        w = y[0],
                        k = y[1],
                        x = Object(l.useState)(""),
                        I = Object(o.a)(x, 2),
                        S = I[0],
                        C = I[1],
                        M = function(e) {
                            j(Object(B.a)(Object(B.a)({}, v), {}, Object(R.a)({}, e.currentTarget.name, e.currentTarget.value)))
                        };
                    return Object(l.useEffect)((function() {
                        d.a.get("/api/contactinfo").then((function(e) {
                            i(e.data.phoneNumbers), s(e.data.emailAddress), b(e.data.address)
                        }))
                    }), []), n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Contact - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                        name: "description",
                        content: "Chester React Personal Portfolio Template Contact Page"
                    })), n.a.createElement("div", {
                        className: "mi-contact-area mi-section mi-padding-top mi-padding-bottom"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "Contact Me"
                    }), n.a.createElement("div", {
                        className: "row"
                    }, n.a.createElement("div", {
                        className: "col-lg-6"
                    }, n.a.createElement("div", {
                        className: "mi-contact-formwrapper"
                    }, n.a.createElement("h4", null, "Get In Touch"), n.a.createElement("form", {
                        action: "#",
                        className: "mi-form mi-contact-form",
                        onSubmit: function(e) {
                            e.preventDefault(), v.name ? v.email ? v.subject ? v.message ? (k(!1), C("You message has been sent!!!")) : (k(!0), C("Message is required")) : (k(!0), C("Subject is required")) : (k(!0), C("Email is required")) : (k(!0), C("Name is required"))
                        }
                    }, n.a.createElement("div", {
                        className: "mi-form-field"
                    }, n.a.createElement("label", {
                        htmlFor: "contact-form-name"
                    }, "Enter your name*"), n.a.createElement("input", {
                        onChange: M,
                        type: "text",
                        name: "name",
                        id: "contact-form-name",
                        value: v.name
                    })), n.a.createElement("div", {
                        className: "mi-form-field"
                    }, n.a.createElement("label", {
                        htmlFor: "contact-form-email"
                    }, "Enter your email*"), n.a.createElement("input", {
                        onChange: M,
                        type: "text",
                        name: "email",
                        id: "contact-form-email",
                        value: v.email
                    })), n.a.createElement("div", {
                        className: "mi-form-field"
                    }, n.a.createElement("label", {
                        htmlFor: "contact-form-subject"
                    }, "Enter your subject*"), n.a.createElement("input", {
                        onChange: M,
                        type: "text",
                        name: "subject",
                        id: "contact-form-subject",
                        value: v.subject
                    })), n.a.createElement("div", {
                        className: "mi-form-field"
                    }, n.a.createElement("label", {
                        htmlFor: "contact-form-message"
                    }, "Enter your Message*"), n.a.createElement("textarea", {
                        onChange: M,
                        name: "message",
                        id: "contact-form-message",
                        cols: "30",
                        rows: "6",
                        value: v.message
                    })), n.a.createElement("div", {
                        className: "mi-form-field"
                    }, n.a.createElement("button", {
                        className: "mi-button",
                        type: "submit"
                    }, "Send Mail"))), w && S ? n.a.createElement("div", {
                        className: "alert alert-danger mt-4"
                    }, S) : !w && S ? n.a.createElement("div", {
                        className: "alert alert-success mt-4"
                    }, S) : null)), n.a.createElement("div", {
                        className: "col-lg-6"
                    }, n.a.createElement("div", {
                        className: "mi-contact-info"
                    }, a ? n.a.createElement("div", {
                        className: "mi-contact-infoblock"
                    }, n.a.createElement("span", {
                        className: "mi-contact-infoblock-icon"
                    }, n.a.createElement(Y.a, null)), n.a.createElement("div", {
                        className: "mi-contact-infoblock-content"
                    }, n.a.createElement("h6", null, "Phone"), a.map((function(e) {
                        return n.a.createElement("p", {
                            key: e
                        }, n.a.createElement("a", {
                            href: e
                        }, e))
                    })))) : null, m ? n.a.createElement("div", {
                        className: "mi-contact-infoblock"
                    }, n.a.createElement("span", {
                        className: "mi-contact-infoblock-icon"
                    }, n.a.createElement(_.a, null)), n.a.createElement("div", {
                        className: "mi-contact-infoblock-content"
                    }, n.a.createElement("h6", null, "Email"), m.map((function(e) {
                        return n.a.createElement("p", {
                            key: e
                        }, n.a.createElement("a", {
                            href: "mailto:".concat(e)
                        }, e))
                    })))) : null, a ? n.a.createElement("div", {
                        className: "mi-contact-infoblock"
                    }, n.a.createElement("span", {
                        className: "mi-contact-infoblock-icon"
                    }, n.a.createElement(H.a, null)), n.a.createElement("div", {
                        className: "mi-contact-infoblock-content"
                    }, n.a.createElement("h6", null, "Address"), n.a.createElement("p", null, f))) : null))))))
                },
                G = a(93),
                J = a.n(G);
            var Q = function(e) {
                var t = Object(l.useState)({}),
                    a = Object(o.a)(t, 2),
                    i = a[0],
                    r = a[1];
                return Object(l.useEffect)((function() {
                    d.a.get("/api/information").then((function(e) {
                        r(e.data.socialLinks)
                    }))
                }), []), n.a.createElement("ul", {
                    className: e.bordered ? "mi-socialicons mi-socialicons-bordered" : "mi-socialicons"
                }, i.facebook ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.facebook
                }, n.a.createElement(w.a, {
                    name: "facebook"
                }))) : null, i.twitter ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.twitter
                }, n.a.createElement(w.a, {
                    name: "twitter"
                }))) : null, i.pinterest ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.pinterest
                }, n.a.createElement(w.a, {
                    name: "pinterest"
                }))) : null, i.behance ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.behance
                }, n.a.createElement(w.a, {
                    name: "behance"
                }))) : null, i.linkedin ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.linkedin
                }, n.a.createElement(w.a, {
                    name: "linkedin"
                }))) : null, i.dribbble ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.dribbble
                }, n.a.createElement(w.a, {
                    name: "dribbble"
                }))) : null, i.github ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: i.github
                }, n.a.createElement(w.a, {
                    name: "github"
                }))) : null)
            };
            var z = function(e) {
                var t = e.lightMode,
                    a = Object(l.useState)(""),
                    i = Object(o.a)(a, 2),
                    r = i[0],
                    c = i[1];
                return Object(l.useEffect)((function() {
                    d.a.get("/api/information").then((function(e) {
                        c(e.data)
                    }))
                }), []), n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Home - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                    name: "description",
                    content: "Chester React Personal Portfolio Template Homepage"
                })), n.a.createElement("div", {
                    className: "mi-home-area mi-padding-section"
                }, n.a.createElement(J.a, {
                    className: "mi-home-particle",
                    params: t ? {
                        particles: {
                            number: {
                                value: 160,
                                density: {
                                    enable: !1
                                }
                            },
                            color: {
                                value: "#000000"
                            },
                            opacity: {
                                value: .1
                            },
                            size: {
                                value: 5,
                                random: !0,
                                anim: {
                                    speed: 4,
                                    size_min: .3
                                }
                            },
                            line_linked: {
                                enable: !1
                            },
                            move: {
                                random: !0,
                                speed: 1,
                                direction: "top",
                                out_mode: "out"
                            }
                        }
                    } : {
                        particles: {
                            number: {
                                value: 160,
                                density: {
                                    enable: !1
                                }
                            },
                            color: {
                                value: "#ffffff"
                            },
                            opacity: {
                                value: .1
                            },
                            size: {
                                value: 5,
                                random: !0,
                                anim: {
                                    speed: 4,
                                    size_min: .3
                                }
                            },
                            line_linked: {
                                enable: !1
                            },
                            move: {
                                random: !0,
                                speed: 1,
                                direction: "top",
                                out_mode: "out"
                            }
                        }
                    }
                }), n.a.createElement("div", {
                    className: "container"
                }, n.a.createElement("div", {
                    className: "row justify-content-center"
                }, n.a.createElement("div", {
                    className: "col-lg-10 col-12"
                }, n.a.createElement("div", {
                    className: "mi-home-content"
                }, n.a.createElement("h1", null, "Hi, I am", " ", n.a.createElement("span", {
                    className: "color-theme"
                }, r.name)), n.a.createElement("p", null, r.aboutContent), n.a.createElement(Q, {
                    bordered: !0
                })))))))
            };
            var V = function() {
                    return n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "404 - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                        name: "description",
                        content: "Chester React Personal Portfolio Template Not Found Page"
                    })), n.a.createElement("div", {
                        className: "mi-about-area mi-section"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement("div", {
                        className: "row justify-content-center"
                    }, n.a.createElement("div", {
                        className: "col-lg-8"
                    }, n.a.createElement("div", {
                        className: "notfound"
                    }, n.a.createElement("div", {
                        className: "notfound-inner text-center"
                    }, n.a.createElement("h1", null, "404"), n.a.createElement("h3", null, "Whoops!!! Page not found!"), n.a.createElement(m.b, {
                        to: "/",
                        className: "mi-button"
                    }, "Back to Home"))))))))
                },
                X = a(309);
            var K = function(e) {
                var t = Object(l.useState)(!1),
                    a = Object(o.a)(t, 2),
                    i = a[0],
                    r = a[1],
                    c = e.content,
                    m = c.title,
                    s = c.subtitle,
                    u = c.imageUrl,
                    g = c.largeImageUrl,
                    d = c.url;
                return n.a.createElement("div", {
                    className: "mi-portfolio mi-portfolio-visible"
                }, n.a.createElement("div", {
                    className: "mi-portfolio-image"
                }, n.a.createElement(h.a, {
                    src: u,
                    placeholder: "/images/portfolio-image-placeholder.png"
                }, (function(e) {
                    return n.a.createElement("img", {
                        src: e,
                        alt: m
                    })
                })), n.a.createElement("ul", null, g ? n.a.createElement("li", null, n.a.createElement("button", {
                    onClick: function() {
                        r(!i)
                    }
                }, n.a.createElement(b.a, null))) : null, d ? n.a.createElement("li", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: d
                }, n.a.createElement(X.a, null))) : null)), d ? n.a.createElement("h5", null, n.a.createElement("a", {
                    rel: "noopener noreferrer",
                    target: "_blank",
                    href: d
                }, m)) : n.a.createElement("h5", null, m), s ? n.a.createElement("h6", null, s) : null, g ? n.a.createElement(f.a, {
                    toggler: i,
                    sources: g
                }) : null)
            };
            var $ = function(e) {
                var t = e.portfolios;
                return n.a.createElement("div", {
                    className: "row mt-30-reverse"
                }, t.map((function(e) {
                    return n.a.createElement("div", {
                        className: "col-lg-4 col-md-6 col-12 mt-30",
                        key: e.id
                    }, n.a.createElement(K, {
                        content: e
                    }))
                })))
            };
            var Z = function() {
                    var e = Object(l.useState)([]),
                        t = Object(o.a)(e, 2),
                        a = t[0],
                        i = t[1],
                        r = Object(l.useState)(1),
                        c = Object(o.a)(r, 2),
                        m = c[0],
                        s = c[1],
                        g = Object(l.useState)(9),
                        p = Object(o.a)(g, 1)[0];
                    Object(l.useEffect)((function() {
                        var e = !0;
                        return d.a.get("/api/portfolios").then((function(t) {
                                e && i(t.data)
                            })),
                            function() {
                                return e = !1
                            }
                    }), [a]);
                    var f = m * p,
                        b = f - p,
                        E = a.slice(b, f);
                    return n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Portfolios - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                        name: "description",
                        content: "Chester React Personal Portfolio Template Portfolios Page"
                    })), n.a.createElement("div", {
                        className: "mi-about mi-section mi-padding-top mi-padding-bottom"
                    }, n.a.createElement("div", {
                        className: "container"
                    }, n.a.createElement(P, {
                        title: "Portfolios"
                    }), n.a.createElement($, {
                        portfolios: E
                    }), a.length > p ? n.a.createElement(q, {
                        className: "mt-50",
                        itemsPerPage: p,
                        totalItems: a.length,
                        paginate: function(e, t) {
                            e.preventDefault(), s(t)
                        },
                        currentPage: m
                    }) : null)))
                },
                ee = a(94),
                te = a.n(ee);
            var ae = function(e) {
                return n.a.createElement("div", {
                    className: "mi-smalltitle"
                }, n.a.createElement("span", {
                    className: "mi-smalltitle-icon"
                }, n.a.createElement(w.a, {
                    name: e.icon
                })), n.a.createElement("h4", null, e.title))
            };
            var le = function(e) {
                var t = window.innerWidth;
                return n.a.createElement("div", {
                    className: "mi-progress"
                }, n.a.createElement("h6", {
                    className: "mi-progress-title"
                }, e.title), n.a.createElement("div", {
                    className: "mi-progress-inner"
                }, n.a.createElement("div", {
                    className: "mi-progress-percentage"
                }, "".concat(e.percentage, "%")), n.a.createElement("div", {
                    className: "mi-progress-container"
                }, t && t > 767 ? n.a.createElement("span", {
                    className: "mi-progress-active",
                    style: e.isVisible ? {
                        width: "".concat(e.percentage, "%")
                    } : {
                        width: 0
                    }
                }) : n.a.createElement("span", {
                    className: "mi-progress-active",
                    style: {
                        width: "".concat(e.percentage, "%")
                    }
                }))))
            };
            var ne = function(e) {
                var t = e.resumeData,
                    a = t.year,
                    l = t.position,
                    i = t.graduation,
                    r = t.university,
                    o = t.company,
                    c = t.details;
                return n.a.createElement("div", {
                    className: "mi-resume mt-30"
                }, n.a.createElement("div", {
                    className: "mi-resume-summary"
                }, n.a.createElement("h6", {
                    className: "mi-resume-year"
                }, a)), n.a.createElement("div", {
                    className: "mi-resume-details"
                }, n.a.createElement("h5", null, l || i), n.a.createElement("h6", {
                    className: "mi-resume-company"
                }, o || r), n.a.createElement("p", null, c)))
            };
            var ie = function() {
                var e = Object(l.useState)([]),
                    t = Object(o.a)(e, 2),
                    a = t[0],
                    i = t[1],
                    r = Object(l.useState)([]),
                    c = Object(o.a)(r, 2),
                    m = c[0],
                    s = c[1],
                    g = Object(l.useState)([]),
                    p = Object(o.a)(g, 2),
                    f = p[0],
                    b = p[1];
                return Object(l.useEffect)((function() {
                    d.a.get("/api/skills").then((function(e) {
                        i(e.data)
                    })), d.a.get("/api/experience").then((function(e) {
                        s(e.data.workingExperience), b(e.data.educationExperience)
                    }))
                }), []), n.a.createElement(O, null, n.a.createElement(u.a, null, n.a.createElement("title", null, "Resume - Chester React Personal Portfolio Template"), n.a.createElement("meta", {
                    name: "description",
                    content: "Chester React Personal Portfolio Template Resume Page"
                })), n.a.createElement("div", {
                    className: "mi-skills-area mi-section mi-padding-top"
                }, n.a.createElement("div", {
                    className: "container"
                }, n.a.createElement(P, {
                    title: "My Skills"
                }), n.a.createElement("div", {
                    className: "mi-skills"
                }, n.a.createElement("div", {
                    className: "row mt-30-reverse"
                }, a.map((function(e) {
                    return n.a.createElement(te.a, {
                        once: !0,
                        className: "col-lg-6 mt-30",
                        key: e.title
                    }, n.a.createElement(le, {
                        title: e.title,
                        percentage: e.value
                    }))
                })))))), n.a.createElement("div", {
                    className: "mi-resume-area mi-section mi-padding-top mi-padding-bottom"
                }, n.a.createElement("div", {
                    className: "container"
                }, n.a.createElement(P, {
                    title: "Resume"
                }), n.a.createElement(ae, {
                    title: "Working Experience",
                    icon: "briefcase"
                }), n.a.createElement("div", {
                    className: "mi-resume-wrapper"
                }, m.map((function(e) {
                    return n.a.createElement(ne, {
                        key: e.id,
                        resumeData: e
                    })
                }))), n.a.createElement("div", {
                    className: "mt-30"
                }), n.a.createElement(ae, {
                    title: "Educational Qualifications",
                    icon: "book"
                }), n.a.createElement("div", {
                    className: "mi-resume-wrapper"
                }, f.map((function(e) {
                    return n.a.createElement(ne, {
                        key: e.id,
                        resumeData: e
                    })
                }))))))
            };
            var re = function() {
                    var e = Object(l.useState)(!1),
                        t = Object(o.a)(e, 2),
                        a = t[0],
                        i = t[1];
                    return a ? document.body.classList.add("light") : document.body.classList.remove("light"), n.a.createElement(m.a, null, n.a.createElement("div", {
                        className: "light-mode"
                    }, n.a.createElement("span", {
                        className: "icon"
                    }, n.a.createElement(c.a, null)), n.a.createElement("button", {
                        className: a ? "light-mode-switch active" : "light-mode-switch",
                        onClick: function() {
                            a ? (i(!1), document.body.classList.remove("light")) : (i(!0), document.body.classList.add("light"))
                        }
                    })), n.a.createElement(s.c, null, n.a.createElement(s.a, {
                        path: "/",
                        exact: !0
                    }, n.a.createElement(z, {
                        lightMode: a
                    })), n.a.createElement(s.a, {
                        path: "/about",
                        component: S
                    }), n.a.createElement(s.a, {
                        path: "/resume",
                        component: ie
                    }), n.a.createElement(s.a, {
                        path: "/portfolios",
                        component: Z
                    }), n.a.createElement(s.a, {
                        path: "/blogs",
                        exact: !0,
                        component: L
                    }), n.a.createElement(s.a, {
                        path: "/blogs/blog-details/:id/:title",
                        component: T
                    }), n.a.createElement(s.a, {
                        path: "/contact",
                        component: W
                    }), n.a.createElement(s.a, {
                        path: "*",
                        component: V
                    })))
                },
                oe = new(a(300))(a(3)),
                ce = {
                    name: "Devid Chester",
                    aboutContent: "I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.",
                    age: 24,
                    phone: "",
                    nationality: "American",
                    language: "English, French",
                    email: "",
                    address: "121 King Street, Melbourne, Australia",
                    freelanceStatus: "Available",
                    socialLinks: {
                        facebook: "https://facebook.com",
                        twitter: "https://twitter.com",
                        pinterest: "",
                        behance: "",
                        linkedin: "",
                        dribbble: "",
                        github: "https://github.com"
                    },
                    brandImage: "/images/brand-image.jpg",
                    aboutImage: "/images/about-image.jpg",
                    aboutImageLg: "/images/about-image-lg.jpg",
                    cvfile: "/files/empty.pdf"
                },
                me = [{
                    title: "Web Design",
                    icon: "color-pallet",
                    details: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
                }, {
                    title: "Web Development",
                    icon: "code",
                    details: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
                }, {
                    title: "Mobile Application",
                    icon: "mobile",
                    details: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem tenetur ratione quod."
                }],
                se = [{
                    id: 1,
                    content: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit nobis tempore quaerat quibusdam, aliquid maxime tempora.",
                    author: {
                        name: "Burdette Turner",
                        designation: "Web Developer, Abc Company"
                    }
                }, {
                    id: 2,
                    content: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita impedit nobis tempore quaerat quibusdam.",
                    author: {
                        name: "Susan Yost",
                        designation: "Client"
                    }
                }, {
                    id: 3,
                    content: "Lorem ipsum dolor, sit amet consectetur adipisicing elit.",
                    author: {
                        name: "Irving Feeney",
                        designation: "Fiverr Client"
                    }
                }],
                ue = [{
                    title: "HTML5",
                    value: 95
                }, {
                    title: "CSS3",
                    value: 90
                }, {
                    title: "Javascript",
                    value: 70
                }, {
                    title: "jQuery",
                    value: 85
                }, {
                    title: "ReactJS",
                    value: 80
                }, {
                    title: "Photoshop",
                    value: 65
                }],
                ge = [{
                    id: 1,
                    title: "T-shirt Mockup",
                    subtitle: "A beautiful t-shirt mockup.",
                    imageUrl: "/images/portfolio-image-1.jpg",
                    largeImageUrl: ["/images/portfolio-image-1-lg.jpg"],
                    url: "https://dribbble.com"
                }, {
                    id: 2,
                    title: "Coffee Mug",
                    subtitle: "Awesome coffee mug design.",
                    imageUrl: "/images/portfolio-image-4.jpg",
                    largeImageUrl: ["/images/portfolio-image-4-lg.jpg", "/images/portfolio-image-4-lg2.jpg"],
                    url: "https://facebook.com"
                }, {
                    id: 3,
                    title: "Tea & Coffee Mug",
                    subtitle: "Beautiful mug with logo.",
                    imageUrl: "/images/portfolio-image-2.jpg",
                    url: "https://pinterest.com"
                }, {
                    id: 4,
                    title: "Pen Holder",
                    subtitle: "A pen holder with beautiful design.",
                    imageUrl: "/images/portfolio-image-3.jpg",
                    largeImageUrl: ["/images/portfolio-image-3-lg.jpg"],
                    url: "#"
                }, {
                    id: 5,
                    title: "Mug",
                    subtitle: "Mug with awesome style",
                    imageUrl: "/images/portfolio-image-5.jpg",
                    largeImageUrl: ["/images/portfolio-image-5-lg.jpg"]
                }, {
                    id: 6,
                    title: "Pendrive",
                    subtitle: "Free pendrive mockup design.",
                    imageUrl: "/images/portfolio-image-6.jpg",
                    largeImageUrl: ["/images/portfolio-image-6-lg.jpg"]
                }, {
                    id: 7,
                    title: "Beautiful Pendrive",
                    subtitle: "Pendrive with great design & flexible.",
                    imageUrl: "/images/portfolio-image-7.jpg",
                    largeImageUrl: ["/images/portfolio-image-7-lg.jpg"],
                    url: "https://twitter.com"
                }, {
                    id: 8,
                    title: "Sticker",
                    subtitle: "Clip sticker mockup design.",
                    imageUrl: "/images/portfolio-image-8.jpg",
                    largeImageUrl: ["/images/portfolio-image-8-lg.jpg"]
                }, {
                    id: 9,
                    title: "Packet",
                    subtitle: "Beautiful packet & product design.",
                    imageUrl: "/images/portfolio-image-9.jpg",
                    largeImageUrl: ["/images/portfolio-image-9-lg.jpg"]
                }, {
                    id: 10,
                    title: "Pen Holder",
                    subtitle: "A pen holder with beautiful design.",
                    imageUrl: "/images/portfolio-image-3.jpg",
                    largeImageUrl: ["/images/portfolio-image-3-lg.jpg"],
                    url: "#"
                }, {
                    id: 11,
                    title: "Coffee Mug",
                    subtitle: "Awesome coffee mug design.",
                    imageUrl: "/images/portfolio-image-4.jpg",
                    largeImageUrl: ["/images/portfolio-image-4-lg.jpg", "/images/portfolio-image-4-lg2.jpg"],
                    url: "https://facebook.com"
                }, {
                    id: 12,
                    title: "Tea & Coffee Mug",
                    subtitle: "Beautiful mug with logo.",
                    imageUrl: "/images/portfolio-image-2.jpg",
                    url: "https://pinterest.com"
                }, {
                    id: 13,
                    title: "T-shirt Mockup",
                    subtitle: "A beautiful t-shirt mockup.",
                    imageUrl: "/images/portfolio-image-1.jpg",
                    largeImageUrl: ["/images/portfolio-image-1-lg.jpg"],
                    url: "https://dribbble.com"
                }, {
                    id: 14,
                    title: "Mug",
                    subtitle: "Mug with awesome style",
                    imageUrl: "/images/portfolio-image-5.jpg",
                    largeImageUrl: ["/images/portfolio-image-5-lg.jpg"]
                }, {
                    id: 15,
                    title: "Pendrive",
                    subtitle: "Free pendrive mockup design.",
                    imageUrl: "/images/portfolio-image-6.jpg",
                    largeImageUrl: ["/images/portfolio-image-6-lg.jpg"]
                }, {
                    id: 16,
                    title: "Beautiful Pendrive",
                    subtitle: "Pendrive with great design & flexible.",
                    imageUrl: "/images/portfolio-image-7.jpg",
                    largeImageUrl: ["/images/portfolio-image-7-lg.jpg"],
                    url: "https://twitter.com"
                }, {
                    id: 17,
                    title: "Sticker",
                    subtitle: "Clip sticker mockup design.",
                    imageUrl: "/images/portfolio-image-8.jpg",
                    largeImageUrl: ["/images/portfolio-image-8-lg.jpg"]
                }, {
                    id: 18,
                    title: "Packet",
                    subtitle: "Beautiful packet & product design.",
                    imageUrl: "/images/portfolio-image-9.jpg",
                    largeImageUrl: ["/images/portfolio-image-9-lg.jpg"]
                }, {
                    id: 19,
                    title: "T-shirt Mockup",
                    subtitle: "A beautiful t-shirt mockup.",
                    imageUrl: "/images/portfolio-image-1.jpg",
                    largeImageUrl: ["/images/portfolio-image-1-lg.jpg"],
                    url: "https://dribbble.com"
                }, {
                    id: 20,
                    title: "Coffee Mug",
                    subtitle: "Awesome coffee mug design.",
                    imageUrl: "/images/portfolio-image-4.jpg",
                    largeImageUrl: ["/images/portfolio-image-4-lg.jpg", "/images/portfolio-image-4-lg2.jpg"],
                    url: "https://facebook.com"
                }, {
                    id: 21,
                    title: "Tea & Coffee Mug",
                    subtitle: "Beautiful mug with logo.",
                    imageUrl: "/images/portfolio-image-2.jpg",
                    url: "https://pinterest.com"
                }, {
                    id: 22,
                    title: "Pen Holder",
                    subtitle: "A pen holder with beautiful design.",
                    imageUrl: "/images/portfolio-image-3.jpg",
                    largeImageUrl: ["/images/portfolio-image-3-lg.jpg"],
                    url: "#"
                }, {
                    id: 23,
                    title: "Mug",
                    subtitle: "Mug with awesome style",
                    imageUrl: "/images/portfolio-image-5.jpg",
                    largeImageUrl: ["/images/portfolio-image-5-lg.jpg"]
                }],
                de = {
                    workingExperience: [{
                        id: 1,
                        year: "2018 - Present",
                        position: "Frontend Web Developer",
                        company: "Abc Company",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }, {
                        id: 2,
                        year: "2016 - 2018",
                        position: "Frontend Web Developer",
                        company: "CBA Company",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }, {
                        id: 3,
                        year: "2014 - 1016",
                        position: "UI/UX Designer",
                        company: "Example Company",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }],
                    educationExperience: [{
                        id: 1,
                        year: "2018 - 2019",
                        graduation: "Master of Science",
                        university: "Abc University",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }, {
                        id: 2,
                        year: "2016 - 2018",
                        graduation: "Bachelor of Science",
                        university: "Abc University",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }, {
                        id: 3,
                        year: "2015 - 2016",
                        graduation: "Higher Schoold Graduation",
                        university: "Abc College",
                        details: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, magni mollitia, aspernatur consequatur accusamus vero eum facere exercitationem velit suscipit ipsam placeat libero. Deleniti exercitationem nostrum quasi. Molestiae, vel porro."
                    }]
                },
                pe = [{
                    id: 1,
                    title: "Markdown & Html supported blog.",
                    featuredImage: "/images/blog-image-1.jpg",
                    filesource: "../../blog/markdown-html-supported-blog.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 2,
                    title: "Installing NodeJS on your device.",
                    featuredImage: "/images/blog-image-2.jpg",
                    filesource: "../../blog/installing-nodejs-on-your-device.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 3,
                    title: "UI/UX design starter with Adobe XD.",
                    featuredImage: "/images/blog-image-3.jpg",
                    filesource: "../../blog/uiux-design-starter-with-adobe-xd.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 4,
                    title: "Boost your post for increasing sales.",
                    featuredImage: "/images/blog-image-4.jpg",
                    filesource: "../../blog/boost-your-post-for-increasing-sales.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 5,
                    title: "Difference between GatsbyJS & NextJS.",
                    featuredImage: "/images/blog-image-5.jpg",
                    filesource: "../../blog/difference-between-gatsbyjs-and-nextjs.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 6,
                    title: "How to choose javascript framework for project.",
                    featuredImage: "/images/blog-image-6.jpg",
                    filesource: "../../blog/how-to-choose-javascript-framework-for-project.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 7,
                    title: "Web automation with python language.",
                    featuredImage: "/images/blog-image-7.jpg",
                    filesource: "../../blog/web-automation-with-python-language.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 8,
                    title: "Time to use latest technology for creating a website.",
                    featuredImage: "/images/blog-image-8.jpg",
                    filesource: "../../blog/time-to-use-latest-technology-for-creating-a-website.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 9,
                    title: "Think out of the box.",
                    featuredImage: "/images/blog-image-9.jpg",
                    filesource: "../../blog/think-out-of-the-box.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 10,
                    title: "Trending designs in 2020.",
                    featuredImage: "/images/blog-image-1.jpg",
                    filesource: "../../blog/trending-designs-in-2020.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 11,
                    title: "How to get 10k instagram followers?",
                    featuredImage: "/images/blog-image-2.jpg",
                    filesource: "../../blog/how-to-get-10k-instagram-followers.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 12,
                    title: "What NodeJS can do?",
                    featuredImage: "/images/blog-image-3.jpg",
                    filesource: "../../blog/what-nodejs-can-do.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 13,
                    title: "Futures of javascript.",
                    featuredImage: "/images/blog-image-4.jpg",
                    filesource: "../../blog/future-of-javascript.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 14,
                    title: "Popular javascript library in 2020.",
                    featuredImage: "/images/blog-image-5.jpg",
                    filesource: "../../blog/popular-javascript-library-in-2020.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }, {
                    id: 15,
                    title: "Promrammers must read books.",
                    featuredImage: "/images/blog-image-6.jpg",
                    filesource: "../../blog/programmers-must-read-books.md",
                    createDay: "20",
                    createMonth: "February",
                    createYear: "2020"
                }],
                fe = {
                    phoneNumbers: ["+012-3456-7891", "+012-3456-7892"],
                    emailAddress: ["admin.sitename@example.com", "info.sitename@example.com"],
                    address: "121 King Street, Melbourne, Victoria 3000, Australia"
                };
            oe.onGet("/api/information").reply((function(e) {
                return [200, ce]
            })), oe.onGet("/api/services").reply((function(e) {
                return [200, me]
            })), oe.onGet("/api/reviews").reply((function(e) {
                return [200, se]
            })), oe.onGet("/api/skills").reply((function(e) {
                return [200, ue]
            })), oe.onGet("/api/portfolios").reply((function(e) {
                return [200, ge]
            })), oe.onGet("/api/experience").reply((function(e) {
                return [200, de]
            })), oe.onGet("/api/blog").reply((function(e) {
                return [200, pe]
            })), oe.onGet("/api/contactinfo").reply((function(e) {
                return [200, fe]
            })), oe.onAny().passThrough();
            Boolean("localhost" === window.location.hostname || "[::1]" === window.location.hostname || window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));
            r.a.render(n.a.createElement(re, null), document.getElementById("root")), "serviceWorker" in navigator && navigator.serviceWorker.ready.then((function(e) {
                e.unregister()
            }))
        },
        95: function(e, t, a) {
            e.exports = a(304)
        }
    },
    [
        [95, 1, 2]
    ]
]);
//# sourceMappingURL=main.d2a3995b.chunk.js.map