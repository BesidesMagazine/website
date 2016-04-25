(function(h, g, c, j, d, l, k) { /*! Jssor */
    new(function() {});
    var e = {
            Bd: function(a) {
                return -c.cos(a * c.PI) / 2 + .5
            },
            we: function(a) {
                return a
            },
            xe: function(a) {
                return -a * (a - 2)
            },
            Ce: function(a) {
                return (a -= 1) * a * a * a * a + 1
            }
        },
        f = {
            Ie: e.Ce
        };
    var b = new function() {
        var f = this,
            Bb = /\S+/g,
            G = 1,
            db = 2,
            hb = 3,
            gb = 4,
            lb = 5,
            H, r = 0,
            i = 0,
            s = 0,
            W = 0,
            z = 0,
            J = navigator,
            pb = J.appName,
            o = J.userAgent,
            p = parseFloat;

        function zb() {
            if (!H) {
                H = {
                    Pe: "ontouchstart" in h || "createTouch" in g
                };
                var a;
                if (J.pointerEnabled || (a = J.msPointerEnabled)) H.kd = a ? "msTouchAction" : "touchAction"
            }
            return H
        }

        function v(j) {
            if (!r) {
                r = -1;
                if (pb == "Microsoft Internet Explorer" && !!h.attachEvent && !!h.ActiveXObject) {
                    var e = o.indexOf("MSIE");
                    r = G;
                    s = p(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on W=@_jscript_version@*/ ;
                    i = g.documentMode || s
                } else if (pb == "Netscape" && !!h.addEventListener) {
                    var d = o.indexOf("Firefox"),
                        b = o.indexOf("Safari"),
                        f = o.indexOf("Chrome"),
                        c = o.indexOf("AppleWebKit");
                    if (d >= 0) {
                        r = db;
                        i = p(o.substring(d + 8))
                    } else if (b >= 0) {
                        var k = o.substring(0, b).lastIndexOf("/");
                        r = f >= 0 ? gb : hb;
                        i = p(o.substring(k + 1, b))
                    } else {
                        var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);
                        if (a) {
                            r = G;
                            i = s = p(a[1])
                        }
                    }
                    if (c >= 0) z = p(o.substring(c + 12))
                } else {
                    var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
                    if (a) {
                        r = lb;
                        i = p(a[2])
                    }
                }
            }
            return j == r
        }

        function q() {
            return v(G)
        }

        function R() {
            return q() && (i < 6 || g.compatMode == "BackCompat")
        }

        function fb() {
            return v(hb)
        }

        function kb() {
            return v(lb)
        }

        function wb() {
            return fb() && z > 534 && z < 535
        }

        function K() {
            v();
            return z > 537 || i > 42 || r == G && i >= 11
        }

        function P() {
            return q() && i < 9
        }

        function xb(a) {
            var b, c;
            return function(f) {
                if (!b) {
                    b = d;
                    var e = a.substr(0, 1).toUpperCase() + a.substr(1);
                    n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(g, d) {
                        var b = a;
                        if (d) b = g + e;
                        if (f.style[b] != k) return c = b
                    })
                }
                return c
            }
        }

        function vb(b) {
            var a;
            return function(c) {
                a = a || xb(b)(c) || b;
                return a
            }
        }
        var L = vb("transform");

        function ob(a) {
            return {}.toString.call(a)
        }
        var F;

        function Hb() {
            if (!F) {
                F = {};
                n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
                    F["[object " + a + "]"] = a.toLowerCase()
                })
            }
            return F
        }

        function n(b, d) {
            var a, c;
            if (ob(b) == "[object Array]") {
                for (a = 0; a < b.length; a++)
                    if (c = d(b[a], a, b)) return c
            } else
                for (a in b)
                    if (c = d(b[a], a, b)) return c
        }

        function C(a) {
            return a == j ? String(a) : Hb()[ob(a)] || "object"
        }

        function mb(a) {
            for (var b in a) return d
        }

        function A(a) {
            try {
                return C(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
            } catch (b) {}
        }

        function u(a, b) {
            return {
                x: a,
                y: b
            }
        }

        function sb(b, a) {
            setTimeout(b, a || 0)
        }

        function I(b, d, c) {
            var a = !b || b == "inherit" ? "" : b;
            n(d, function(c) {
                var b = c.exec(a);
                if (b) {
                    var d = a.substr(0, b.index),
                        e = a.substr(b.index + b[0].length + 1, a.length - 1);
                    a = d + e
                }
            });
            a = c + (!a.indexOf(" ") ? "" : " ") + a;
            return a
        }

        function ub(b, a) {
            if (i < 9) b.style.filter = a
        }
        f.nf = zb;
        f.jd = q;
        f.of = fb;
        f.Qc = kb;
        f.rf = K;
        f.cb = P;
        xb("transform");
        f.vc = function() {
            return i
        };
        f.mf = function() {
            v();
            return z
        };
        f.Jb = sb;

        function Z(a) {
            a.constructor === Z.caller && a.Bc && a.Bc.apply(a, Z.caller.arguments)
        }
        f.Bc = Z;
        f.pb = function(a) {
            if (f.lf(a)) a = g.getElementById(a);
            return a
        };

        function t(a) {
            return a || h.event
        }
        f.Ec = t;
        f.Ub = function(b) {
            b = t(b);
            var a = b.target || b.srcElement || g;
            if (a.nodeType == 3) a = f.Hc(a);
            return a
        };
        f.Dc = function(a) {
            a = t(a);
            return {
                x: a.pageX || a.clientX || 0,
                y: a.pageY || a.clientY || 0
            }
        };

        function D(c, d, a) {
            if (a !== k) c.style[d] = a == k ? "" : a;
            else {
                var b = c.currentStyle || c.style;
                a = b[d];
                if (a == "" && h.getComputedStyle) {
                    b = c.ownerDocument.defaultView.getComputedStyle(c, j);
                    b && (a = b.getPropertyValue(d) || b[d])
                }
                return a
            }
        }

        function bb(b, c, a, d) {
            if (a !== k) {
                if (a == j) a = "";
                else d && (a += "px");
                D(b, c, a)
            } else return p(D(b, c))
        }

        function m(c, a) {
            var d = a ? bb : D,
                b;
            if (a & 4) b = vb(c);
            return function(e, f) {
                return d(e, b ? b(e) : c, f, a & 2)
            }
        }

        function Eb(b) {
            if (q() && s < 9) {
                var a = /opacity=([^)]*)/.exec(b.style.filter || "");
                return a ? p(a[1]) / 100 : 1
            } else return p(b.style.opacity || "1")
        }

        function Gb(b, a, f) {
            if (q() && s < 9) {
                var h = b.style.filter || "",
                    i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
                    e = c.round(100 * a),
                    d = "";
                if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
                var g = I(h, [i], d);
                ub(b, g)
            } else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
        }
        var M = {
            M: ["rotate"],
            W: ["rotateX"],
            U: ["rotateY"],
            Ob: ["skewX"],
            Pb: ["skewY"]
        };
        if (!K()) M = B(M, {
            o: ["scaleX", 2],
            n: ["scaleY", 2],
            Q: ["translateZ", 1]
        });

        function N(d, a) {
            var c = "";
            if (a) {
                if (q() && i && i < 10) {
                    delete a.W;
                    delete a.U;
                    delete a.Q
                }
                b.e(a, function(d, b) {
                    var a = M[b];
                    if (a) {
                        var e = a[1] || 0;
                        if (O[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
                    }
                });
                if (K()) {
                    if (a.jb || a.eb || a.Q) c += " translate3d(" + (a.jb || 0) + "px," + (a.eb || 0) + "px," + (a.Q || 0) + "px)";
                    if (a.o == k) a.o = 1;
                    if (a.n == k) a.n = 1;
                    if (a.o != 1 || a.n != 1) c += " scale3d(" + a.o + ", " + a.n + ", 1)"
                }
            }
            d.style[L(d)] = c
        }
        f.zc = m("transformOrigin", 4);
        f.Xe = m("backfaceVisibility", 4);
        f.Re = m("transformStyle", 4);
        f.ae = m("perspective", 6);
        f.Te = m("perspectiveOrigin", 4);
        f.Ue = function(a, b) {
            if (q() && s < 9 || s < 10 && R()) a.style.zoom = b == 1 ? "" : b;
            else {
                var c = L(a),
                    f = "scale(" + b + ")",
                    e = a.style[c],
                    g = new RegExp(/[\s]*scale\(.*?\)/g),
                    d = I(e, [g], f);
                a.style[c] = d
            }
        };
        f.mc = function(b, a) {
            return function(c) {
                c = t(c);
                var e = c.type,
                    d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
                (!d || d !== a && !f.We(a, d)) && b(c)
            }
        };
        f.a = function(a, d, b, c) {
            a = f.pb(a);
            if (a.addEventListener) {
                d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                a.addEventListener(d, b, c)
            } else if (a.attachEvent) {
                a.attachEvent("on" + d, b);
                c && a.setCapture && a.setCapture()
            }
        };
        f.K = function(a, c, d, b) {
            a = f.pb(a);
            if (a.removeEventListener) {
                c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b)
            } else if (a.detachEvent) {
                a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture()
            }
        };
        f.Nb = function(a) {
            a = t(a);
            a.preventDefault && a.preventDefault();
            a.cancel = d;
            a.returnValue = l
        };
        f.gf = function(a) {
            a = t(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = d
        };
        f.F = function(d, c) {
            var a = [].slice.call(arguments, 2),
                b = function() {
                    var b = a.concat([].slice.call(arguments, 0));
                    return c.apply(d, b)
                };
            return b
        };
        f.Fc = function(a, b) {
            if (b == k) return a.textContent || a.innerText;
            var c = g.createTextNode(b);
            f.oc(a);
            a.appendChild(c)
        };
        f.Db = function(d, c) {
            for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
            return b
        };

        function nb(a, c, e, b) {
            b = b || "u";
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (V(a, b) == c) return a;
                    if (!e) {
                        var d = nb(a, c, e, b);
                        if (d) return d
                    }
                }
        }
        f.v = nb;

        function T(a, d, f, b) {
            b = b || "u";
            var c = [];
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    V(a, b) == d && c.push(a);
                    if (!f) {
                        var e = T(a, d, f, b);
                        if (e.length) c = c.concat(e)
                    }
                }
            return c
        }
        f.bf = T;

        function ib(a, c, d) {
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    if (a.tagName == c) return a;
                    if (!d) {
                        var b = ib(a, c, d);
                        if (b) return b
                    }
                }
        }
        f.af = ib;

        function yb(a, c, e) {
            var b = [];
            for (a = a ? a.firstChild : j; a; a = a.nextSibling)
                if (a.nodeType == 1) {
                    (!c || a.tagName == c) && b.push(a);
                    if (!e) {
                        var d = yb(a, c, e);
                        if (d.length) b = b.concat(d)
                    }
                }
            return b
        }
        f.Ze = yb;
        f.Ye = function(b, a) {
            return b.getElementsByTagName(a)
        };

        function B() {
            var e = arguments,
                d, c, b, a, g = 1 & e[0],
                f = 1 + g;
            d = e[f - 1] || {};
            for (; f < e.length; f++)
                if (c = e[f])
                    for (b in c) {
                        a = c[b];
                        if (a !== k) {
                            a = c[b];
                            var h = d[b];
                            d[b] = g && (A(h) || A(a)) ? B(g, {}, h, a) : a
                        }
                    }
                return d
        }
        f.C = B;

        function ab(f, g) {
            var d = {},
                c, a, b;
            for (c in f) {
                a = f[c];
                b = g[c];
                if (a !== b) {
                    var e;
                    if (A(a) && A(b)) {
                        a = ab(a, b);
                        e = !mb(a)
                    }!e && (d[c] = a)
                }
            }
            return d
        }
        f.Gc = function(a) {
            return C(a) == "function"
        };
        f.lf = function(a) {
            return C(a) == "string"
        };
        f.uc = function(a) {
            return !isNaN(p(a)) && isFinite(a)
        };
        f.e = n;

        function S(a) {
            return g.createElement(a)
        }
        f.vb = function() {
            return S("DIV")
        };
        f.ce = function() {
            return S("SPAN")
        };
        f.Jc = function() {};

        function X(b, c, a) {
            if (a == k) return b.getAttribute(c);
            b.setAttribute(c, a)
        }

        function V(a, b) {
            return X(a, b) || X(a, "data-" + b)
        }
        f.z = X;
        f.j = V;

        function x(b, a) {
            if (a == k) return b.className;
            b.className = a
        }
        f.Cc = x;

        function rb(b) {
            var a = {};
            n(b, function(b) {
                a[b] = b
            });
            return a
        }

        function tb(b, a) {
            return b.match(a || Bb)
        }

        function Q(b, a) {
            return rb(tb(b || "", a))
        }
        f.Dd = tb;

        function cb(b, c) {
            var a = "";
            n(c, function(c) {
                a && (a += b);
                a += c
            });
            return a
        }

        function E(a, c, b) {
            x(a, cb(" ", B(ab(Q(x(a)), Q(c)), Q(b))))
        }
        f.Hc = function(a) {
            return a.parentNode
        };
        f.G = function(a) {
            f.Y(a, "none")
        };
        f.r = function(a, b) {
            f.Y(a, b ? "none" : "")
        };
        f.Yd = function(b, a) {
            b.removeAttribute(a)
        };
        f.Wd = function() {
            return q() && i < 10
        };
        f.Vd = function(d, a) {
            if (a) d.style.clip = "rect(" + c.round(a.f) + "px " + c.round(a.p) + "px " + c.round(a.m) + "px " + c.round(a.g) + "px)";
            else if (a !== k) {
                var g = d.style.cssText,
                    f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    e = I(g, f, "");
                b.lb(d, e)
            }
        };
        f.S = function() {
            return +new Date
        };
        f.D = function(b, a) {
            b.appendChild(a)
        };
        f.Qb = function(b, a, c) {
            (c || a.parentNode).insertBefore(b, a)
        };
        f.Gb = function(b, a) {
            a = a || b.parentNode;
            a && a.removeChild(b)
        };
        f.Zd = function(a, b) {
            n(a, function(a) {
                f.Gb(a, b)
            })
        };
        f.oc = function(a) {
            f.Zd(f.Db(a, d), a)
        };
        f.Jd = function(a, b) {
            var c = f.Hc(a);
            b & 1 && f.L(a, (f.k(c) - f.k(a)) / 2);
            b & 2 && f.H(a, (f.l(c) - f.l(a)) / 2)
        };
        f.Kd = function(b, a) {
            return parseInt(b, a || 10)
        };
        f.Ld = p;
        f.We = function(b, a) {
            var c = g.body;
            while (a && b !== a && c !== a) try {
                a = a.parentNode
            } catch (d) {
                return l
            }
            return b === a
        };

        function Y(d, c, b) {
            var a = d.cloneNode(!c);
            !b && f.Yd(a, "id");
            return a
        }
        f.N = Y;
        f.ob = function(e, g) {
            var a = new Image;

            function b(e, d) {
                f.K(a, "load", b);
                f.K(a, "abort", c);
                f.K(a, "error", c);
                g && g(a, d)
            }

            function c(a) {
                b(a, d)
            }
            if (kb() && i < 11.6 || !e) b(!e);
            else {
                f.a(a, "load", b);
                f.a(a, "abort", c);
                f.a(a, "error", c);
                a.src = e
            }
        };
        f.Md = function(d, a, e) {
            var c = d.length + 1;

            function b(b) {
                c--;
                if (a && b && b.src == a.src) a = b;
                !c && e && e(a)
            }
            n(d, function(a) {
                f.ob(a.src, b)
            });
            b()
        };
        f.Nd = function(a, g, i, h) {
            if (h) a = Y(a);
            var c = T(a, g);
            if (!c.length) c = b.Ye(a, g);
            for (var f = c.length - 1; f > -1; f--) {
                var d = c[f],
                    e = Y(i);
                x(e, x(d));
                b.lb(e, d.style.cssText);
                b.Qb(e, d);
                b.Gb(d)
            }
            return a
        };

        function Ib(a) {
            var l = this,
                p = "",
                r = ["av", "pv", "ds", "dn"],
                e = [],
                q, j = 0,
                h = 0,
                d = 0;

            function i() {
                E(a, q, e[d || j || h & 2 || h]);
                b.O(a, "pointer-events", d ? "none" : "")
            }

            function c() {
                j = 0;
                i();
                f.K(g, "mouseup", c);
                f.K(g, "touchend", c);
                f.K(g, "touchcancel", c)
            }

            function o(a) {
                if (d) f.Nb(a);
                else {
                    j = 4;
                    i();
                    f.a(g, "mouseup", c);
                    f.a(g, "touchend", c);
                    f.a(g, "touchcancel", c)
                }
            }
            l.Od = function(a) {
                if (a === k) return h;
                h = a & 2 || a & 1;
                i()
            };
            l.rd = function(a) {
                if (a === k) return !d;
                d = a ? 0 : 3;
                i()
            };
            l.Z = a = f.pb(a);
            var m = b.Dd(x(a));
            if (m) p = m.shift();
            n(r, function(a) {
                e.push(p + a)
            });
            q = cb(" ", e);
            e.unshift("");
            f.a(a, "mousedown", o);
            f.a(a, "touchstart", o)
        }
        f.ec = function(a) {
            return new Ib(a)
        };
        f.O = D;
        f.rb = m("overflow");
        f.H = m("top", 2);
        f.L = m("left", 2);
        f.k = m("width", 2);
        f.l = m("height", 2);
        f.Pd = m("marginLeft", 2);
        f.Oe = m("marginTop", 2);
        f.u = m("position");
        f.Y = m("display");
        f.A = m("zIndex", 1);
        f.tb = function(b, a, c) {
            if (a != k) Gb(b, a, c);
            else return Eb(b)
        };
        f.lb = function(a, b) {
            if (b != k) a.style.cssText = b;
            else return a.style.cssText
        };
        var U = {
            B: f.tb,
            f: f.H,
            g: f.L,
            T: f.k,
            V: f.l,
            ub: f.u,
            Bf: f.Y,
            J: f.A
        };

        function w(g, l) {
            var e = P(),
                b = K(),
                d = wb(),
                h = L(g);

            function i(b, d, a) {
                var e = b.db(u(-d / 2, -a / 2)),
                    f = b.db(u(d / 2, -a / 2)),
                    g = b.db(u(d / 2, a / 2)),
                    h = b.db(u(-d / 2, a / 2));
                b.db(u(300, 300));
                return u(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
            }

            function a(d, a) {
                a = a || {};
                var g = a.Q || 0,
                    l = (a.W || 0) % 360,
                    m = (a.U || 0) % 360,
                    o = (a.M || 0) % 360,
                    p = a.Af;
                if (e) {
                    g = 0;
                    l = 0;
                    m = 0;
                    p = 0
                }
                var c = new Db(a.jb, a.eb, g);
                c.W(l);
                c.U(m);
                c.Qd(o);
                c.Rd(a.Ob, a.Pb);
                c.tc(a.o, a.n, p);
                if (b) {
                    c.bb(a.wb, a.xb);
                    d.style[h] = c.Sd()
                } else if (!W || W < 9) {
                    var j = "";
                    if (o || a.o != k && a.o != 1 || a.n != k && a.n != 1) {
                        var n = i(c, a.gb, a.fb);
                        f.Oe(d, n.y);
                        f.Pd(d, n.x);
                        j = c.Td()
                    }
                    var r = d.style.filter,
                        s = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
                        q = I(r, [s], j);
                    ub(d, q)
                }
            }
            w = function(e, c) {
                c = c || {};
                var h = c.wb,
                    i = c.xb,
                    g;
                n(U, function(a, b) {
                    g = c[b];
                    g !== k && a(e, g)
                });
                f.Vd(e, c.c);
                if (!b) {
                    h != k && f.L(e, c.Lc + h);
                    i != k && f.H(e, c.Mc + i)
                }
                if (c.Ud)
                    if (d) sb(f.F(j, N, e, c));
                    else a(e, c)
            };
            f.zb = N;
            if (d) f.zb = w;
            if (e) f.zb = a;
            else if (!b) a = N;
            f.E = w;
            w(g, l)
        }
        f.zb = w;
        f.E = w;

        function Db(i, l, p) {
            var d = this,
                b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, i || 0, l || 0, p || 0, 1],
                h = c.sin,
                g = c.cos,
                m = c.tan;

            function f(a) {
                return a * c.PI / 180
            }

            function o(a, b) {
                return {
                    x: a,
                    y: b
                }
            }

            function n(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) {
                return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j]
            }

            function e(c, a) {
                return n.apply(j, (a || b).concat(c))
            }
            d.tc = function(a, c, d) {
                if (a == k) a = 1;
                if (c == k) c = 1;
                if (d == k) d = 1;
                if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
            };
            d.bb = function(a, c, d) {
                b[12] += a || 0;
                b[13] += c || 0;
                b[14] += d || 0
            };
            d.W = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1])
                }
            };
            d.U = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1])
                }
            };
            d.Qd = function(c) {
                if (c) {
                    a = f(c);
                    var d = g(a),
                        i = h(a);
                    b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.Rd = function(a, c) {
                if (a || c) {
                    i = f(a);
                    l = f(c);
                    b = e([1, m(l), 0, 0, m(i), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
                }
            };
            d.db = function(c) {
                var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
                return o(a[12], a[13])
            };
            d.Sd = function() {
                return "matrix3d(" + b.join(",") + ")"
            };
            d.Td = function() {
                return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
            }
        }
        new function() {
            var a = this;

            function b(d, g) {
                for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
                    for (var k = f[c] = [], b = 0; b < h; b++) {
                        for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
                        k[b] = e
                    }
                return f
            }
            a.o = function(b, c) {
                return a.Oc(b, c, 0)
            };
            a.n = function(b, c) {
                return a.Oc(b, 0, c)
            };
            a.Oc = function(a, c, d) {
                return b(a, [
                    [c, 0],
                    [0, d]
                ])
            };
            a.db = function(d, c) {
                var a = b(d, [
                    [c.x],
                    [c.y]
                ]);
                return u(a[0][0], a[1][0])
            }
        };
        var O = {
            Lc: 0,
            Mc: 0,
            wb: 0,
            xb: 0,
            q: 1,
            o: 1,
            n: 1,
            M: 0,
            W: 0,
            U: 0,
            jb: 0,
            eb: 0,
            Q: 0,
            Ob: 0,
            Pb: 0
        };
        f.Pc = function(a) {
            var c = a || {};
            if (a)
                if (b.Gc(a)) c = {
                    gc: c
                };
                else if (b.Gc(a.c)) c.c = {
                gc: a.c
            };
            return c
        };
        f.Sc = function(l, m, w, n, y, z, o) {
            var a = m;
            if (l) {
                a = {};
                for (var g in m) {
                    var A = z[g] || 1,
                        v = y[g] || [0, 1],
                        f = (w - v[0]) / v[1];
                    f = c.min(c.max(f, 0), 1);
                    f = f * A;
                    var u = c.floor(f);
                    if (f != u) f -= u;
                    var h = n.gc || e.Bd,
                        i, B = l[g],
                        q = m[g];
                    if (b.uc(q)) {
                        h = n[g] || h;
                        var x = h(f);
                        i = B + q * x
                    } else {
                        i = b.C({
                            Tb: {}
                        }, l[g]);
                        b.e(q.Tb || q, function(d, a) {
                            if (n.c) h = n.c[a] || n.c.gc || h;
                            var c = h(f),
                                b = d * c;
                            i.Tb[a] = b;
                            i[a] += b
                        })
                    }
                    a[g] = i
                }
                var t = b.e(m, function(b, a) {
                    return O[a] != k
                });
                t && b.e(O, function(c, b) {
                    if (a[b] == k && l[b] !== k) a[b] = l[b]
                });
                if (t) {
                    if (a.q) a.o = a.n = a.q;
                    a.gb = o.gb;
                    a.fb = o.fb;
                    a.Ud = d
                }
            }
            if (m.c && o.bb) {
                var p = a.c.Tb,
                    s = (p.f || 0) + (p.m || 0),
                    r = (p.g || 0) + (p.p || 0);
                a.g = (a.g || 0) + r;
                a.f = (a.f || 0) + s;
                a.c.g -= r;
                a.c.p -= r;
                a.c.f -= s;
                a.c.m -= s
            }
            if (a.c && b.Wd() && !a.c.f && !a.c.g && a.c.p == o.gb && a.c.m == o.fb) a.c = j;
            return a
        }
    };

    function n() {
        var a = this,
            d = [];

        function i(a, b) {
            d.push({
                dc: a,
                Zb: b
            })
        }

        function g(a, c) {
            b.e(d, function(b, e) {
                b.dc == a && b.Zb === c && d.splice(e, 1)
            })
        }
        a.Ab = a.addEventListener = i;
        a.removeEventListener = g;
        a.i = function(a) {
            var c = [].slice.call(arguments, 1);
            b.e(d, function(b) {
                b.dc == a && b.Zb.apply(h, c)
            })
        }
    }
    var m = function(z, C, i, J, M, L) {
        z = z || 0;
        var a = this,
            q, n, o, u, A = 0,
            G, H, F, B, y = 0,
            g = 0,
            m = 0,
            D, k, f, e, p, w = [],
            x;

        function O(a) {
            f += a;
            e += a;
            k += a;
            g += a;
            m += a;
            y += a
        }

        function t(o) {
            var h = o;
            if (p && (h >= e || h <= f)) h = ((h - f) % p + p) % p + f;
            if (!D || u || g != h) {
                var j = c.min(h, e);
                j = c.max(j, f);
                if (!D || u || j != m) {
                    if (L) {
                        var l = (j - k) / (C || 1);
                        if (i.Tc) l = 1 - l;
                        var n = b.Sc(M, L, l, G, F, H, i);
                        if (x) b.e(n, function(b, a) {
                            x[a] && x[a](J, b)
                        });
                        else b.E(J, n)
                    }
                    a.hc(m - k, j - k);
                    m = j;
                    b.e(w, function(b, c) {
                        var a = o < g ? w[w.length - c - 1] : b;
                        a.X(m - y)
                    });
                    var r = g,
                        q = m;
                    g = h;
                    D = d;
                    a.Lb(r, q)
                }
            }
        }

        function E(a, b, d) {
            b && a.Mb(e);
            if (!d) {
                f = c.min(f, a.Cd() + y);
                e = c.max(e, a.ic() + y)
            }
            w.push(a)
        }
        var r = h.requestAnimationFrame || h.webkitRequestAnimationFrame || h.mozRequestAnimationFrame || h.msRequestAnimationFrame;
        if (b.of() && b.vc() < 7) r = j;
        r = r || function(a) {
            b.Jb(a, i.ab)
        };

        function I() {
            if (q) {
                var d = b.S(),
                    e = c.min(d - A, i.Yc),
                    a = g + e * o;
                A = d;
                if (a * o >= n * o) a = n;
                t(a);
                if (!u && a * o >= n * o) K(B);
                else r(I)
            }
        }

        function s(h, i, j) {
            if (!q) {
                q = d;
                u = j;
                B = i;
                h = c.max(h, f);
                h = c.min(h, e);
                n = h;
                o = n < g ? -1 : 1;
                a.Wc();
                A = b.S();
                r(I)
            }
        }

        function K(b) {
            if (q) {
                u = q = B = l;
                a.Uc();
                b && b()
            }
        }
        a.Rc = function(a, b, c) {
            s(a ? g + a : e, b, c)
        };
        a.Nc = s;
        a.kb = K;
        a.Ed = function(a) {
            s(a)
        };
        a.R = function() {
            return g
        };
        a.ud = function() {
            return n
        };
        a.mb = function() {
            return m
        };
        a.X = t;
        a.bb = function(a) {
            t(g + a)
        };
        a.Ic = function() {
            return q
        };
        a.Se = function(a) {
            p = a
        };
        a.Mb = O;
        a.id = function(a, b) {
            E(a, 0, b)
        };
        a.Wb = function(a) {
            E(a, 1)
        };
        a.Cd = function() {
            return f
        };
        a.ic = function() {
            return e
        };
        a.Lb = a.Wc = a.Uc = a.hc = b.Jc;
        a.kc = b.S();
        i = b.C({
            ab: 16,
            Yc: 50
        }, i);
        p = i.cd;
        x = i.Id;
        f = k = z;
        e = z + C;
        H = i.Vc || {};
        F = i.ed || {};
        G = b.Pc(i.P)
    };
    var p = new function() {
            var h = this;

            function g(b, a, c) {
                c.push(a);
                b[a] = b[a] || [];
                b[a].push(c)
            }
            h.Xd = function(d) {
                for (var e = [], a, b = 0; b < d.hb; b++)
                    for (a = 0; a < d.s; a++) g(e, c.ceil(1e5 * c.random()) % 13, [b, a]);
                return e
            }
        },
        s = function(k, s, q, t, y) {
            var f = this,
                u, g, a, x = 0,
                w = t.Fd,
                r, h = 8;

            function i(g, f) {
                var a = {
                    ab: f,
                    Fb: 1,
                    Jb: 0,
                    s: 1,
                    hb: 1,
                    B: 0,
                    q: 0,
                    c: 0,
                    bb: l,
                    Yb: l,
                    Tc: l,
                    be: p.Xd,
                    vd: {
                        qf: 0,
                        Qe: 0
                    },
                    P: e.Bd,
                    Vc: {},
                    Rb: [],
                    ed: {}
                };
                b.C(a, g);
                a.P = b.Pc(a.P);
                a.jf = c.ceil(a.Fb / a.ab);
                a.cf = function(c, b) {
                    c /= a.s;
                    b /= a.hb;
                    var f = c + "x" + b;
                    if (!a.Rb[f]) {
                        a.Rb[f] = {
                            T: c,
                            V: b
                        };
                        for (var d = 0; d < a.s; d++)
                            for (var e = 0; e < a.hb; e++) a.Rb[f][e + "," + d] = {
                                f: e * b,
                                p: d * c + c,
                                m: e * b + b,
                                g: d * c
                            }
                    }
                    return a.Rb[f]
                };
                if (a.Eb) {
                    a.Eb = i(a.Eb, f);
                    a.Yb = d
                }
                return a
            }

            function o(B, h, a, w, o, m) {
                var z = this,
                    u, v = {},
                    i = {},
                    n = [],
                    f, e, s, q = a.vd.qf || 0,
                    r = a.vd.Qe || 0,
                    g = a.cf(o, m),
                    p = C(a),
                    D = p.length - 1,
                    t = a.Fb + a.Jb * D,
                    x = w + t,
                    k = a.Yb,
                    y;
                x += 50;

                function C(a) {
                    var b = a.be(a);
                    return a.Tc ? b.reverse() : b
                }
                z.Ac = x;
                z.Kb = function(d) {
                    d -= w;
                    var e = d < t;
                    if (e || y) {
                        y = e;
                        if (!k) d = t - d;
                        var f = c.ceil(d / a.ab);
                        b.e(i, function(a, e) {
                            var d = c.max(f, a.ff);
                            d = c.min(d, a.length - 1);
                            if (a.wc != d) {
                                if (!a.wc && !k) b.r(n[e]);
                                else d == a.df && k && b.G(n[e]);
                                a.wc = d;
                                b.E(n[e], a[d])
                            }
                        })
                    }
                };
                h = b.N(h);
                b.zb(h, j);
                if (b.cb()) {
                    var E = !h["no-image"],
                        A = b.Ze(h);
                    b.e(A, function(a) {
                        (E || a["jssor-slider"]) && b.tb(a, b.tb(a), d)
                    })
                }
                b.e(p, function(h, j) {
                    b.e(h, function(G) {
                        var K = G[0],
                            J = G[1],
                            t = K + "," + J,
                            n = l,
                            p = l,
                            x = l;
                        if (q && J % 2) {
                            if (q & 3) n = !n;
                            if (q & 12) p = !p;
                            if (q & 16) x = !x
                        }
                        if (r && K % 2) {
                            if (r & 3) n = !n;
                            if (r & 12) p = !p;
                            if (r & 16) x = !x
                        }
                        a.f = a.f || a.c & 4;
                        a.m = a.m || a.c & 8;
                        a.g = a.g || a.c & 1;
                        a.p = a.p || a.c & 2;
                        var E = p ? a.m : a.f,
                            B = p ? a.f : a.m,
                            D = n ? a.p : a.g,
                            C = n ? a.g : a.p;
                        a.c = E || B || D || C;
                        s = {};
                        e = {
                            f: 0,
                            g: 0,
                            B: 1,
                            T: o,
                            V: m
                        };
                        f = b.C({}, e);
                        u = b.C({}, g[t]);
                        if (a.B) e.B = 2 - a.B;
                        if (a.J) {
                            e.J = a.J;
                            f.J = 0
                        }
                        var I = a.s * a.hb > 1 || a.c;
                        if (a.q || a.M) {
                            var H = d;
                            if (b.cb())
                                if (a.s * a.hb > 1) H = l;
                                else I = l;
                            if (H) {
                                e.q = a.q ? a.q - 1 : 1;
                                f.q = 1;
                                if (b.cb() || b.Qc()) e.q = c.min(e.q, 2);
                                var N = a.M || 0;
                                e.M = N * 360 * (x ? -1 : 1);
                                f.M = 0
                            }
                        }
                        if (I) {
                            var h = u.Tb = {};
                            if (a.c) {
                                var w = a.yf || 1;
                                if (E && B) {
                                    h.f = g.V / 2 * w;
                                    h.m = -h.f
                                } else if (E) h.m = -g.V * w;
                                else if (B) h.f = g.V * w;
                                if (D && C) {
                                    h.g = g.T / 2 * w;
                                    h.p = -h.g
                                } else if (D) h.p = -g.T * w;
                                else if (C) h.g = g.T * w
                            }
                            s.c = u;
                            f.c = g[t]
                        }
                        var L = n ? 1 : -1,
                            M = p ? 1 : -1;
                        if (a.x) e.g += o * a.x * L;
                        if (a.y) e.f += m * a.y * M;
                        b.e(e, function(a, c) {
                            if (b.uc(a))
                                if (a != f[c]) s[c] = a - f[c]
                        });
                        v[t] = k ? f : e;
                        var F = a.jf,
                            A = c.round(j * a.Jb / a.ab);
                        i[t] = new Array(A);
                        i[t].ff = A;
                        i[t].df = A + F - 1;
                        for (var z = 0; z <= F; z++) {
                            var y = b.Sc(f, s, z / F, a.P, a.ed, a.Vc, {
                                bb: a.bb,
                                gb: o,
                                fb: m
                            });
                            y.J = y.J || 1;
                            i[t].push(y)
                        }
                    })
                });
                p.reverse();
                b.e(p, function(a) {
                    b.e(a, function(c) {
                        var f = c[0],
                            e = c[1],
                            d = f + "," + e,
                            a = h;
                        if (e || f) a = b.N(h);
                        b.E(a, v[d]);
                        b.rb(a, "hidden");
                        b.u(a, "absolute");
                        B.Ve(a);
                        n[d] = a;
                        b.r(a, !k)
                    })
                })
            }

            function v() {
                var b = this,
                    c = 0;
                m.call(b, 0, u);
                b.Lb = function(d, b) {
                    if (b - c > h) {
                        c = b;
                        a && a.Kb(b);
                        g && g.Kb(b)
                    }
                };
                b.yc = r
            }
            f.hf = function() {
                var a = 0,
                    b = t.sb,
                    d = b.length;
                if (w) a = x++ % d;
                else a = c.floor(c.random() * d);
                b[a] && (b[a].ib = a);
                return b[a]
            };
            f.kf = function(w, x, l, m, b) {
                r = b;
                b = i(b, h);
                var j = m.xc,
                    e = l.xc;
                j["no-image"] = !m.bc;
                e["no-image"] = !l.bc;
                var n = j,
                    p = e,
                    v = b,
                    d = b.Eb || i({}, h);
                if (!b.Yb) {
                    n = e;
                    p = j
                }
                var t = d.Mb || 0;
                g = new o(k, p, d, c.max(t - d.ab, 0), s, q);
                a = new o(k, n, v, c.max(d.ab - t, 0), s, q);
                g.Kb(0);
                a.Kb(0);
                u = c.max(g.Ac, a.Ac);
                f.ib = w
            };
            f.yb = function() {
                k.yb();
                g = j;
                a = j
            };
            f.pf = function() {
                var b = j;
                if (a) b = new v;
                return b
            };
            if (b.cb() || b.Qc() || y && b.mf() < 537) h = 16;
            n.call(f);
            m.call(f, -1e7, 1e7)
        },
        i = function(p, fc) {
            var f = this;

            function Bc() {
                var a = this;
                m.call(a, -1e8, 2e8);
                a.sf = function() {
                    var b = a.mb(),
                        d = c.floor(b),
                        f = t(d),
                        e = b - c.floor(b);
                    return {
                        ib: f,
                        ef: d,
                        ub: e
                    }
                };
                a.Lb = function(b, a) {
                    var e = c.floor(a);
                    if (e != a && a > b) e++;
                    Ub(e, d);
                    f.i(i.Ne, t(a), t(b), a, b)
                }
            }

            function Ac() {
                var a = this;
                m.call(a, 0, 0, {
                    cd: r
                });
                b.e(C, function(b) {
                    D & 1 && b.Se(r);
                    a.Wb(b);
                    b.Mb(ib / bc)
                })
            }

            function zc() {
                var a = this,
                    b = Tb.Z;
                m.call(a, -1, 2, {
                    P: e.we,
                    Id: {
                        ub: Zb
                    },
                    cd: r
                }, b, {
                    ub: 1
                }, {
                    ub: -2
                });
                a.Xb = b
            }

            function nc(o, n) {
                var b = this,
                    e, g, h, k, c;
                m.call(b, -1e8, 2e8, {
                    Yc: 100
                });
                b.Wc = function() {
                    M = d;
                    S = j;
                    f.i(i.te, t(w.R()), w.R())
                };
                b.Uc = function() {
                    M = l;
                    k = l;
                    var a = w.sf();
                    f.i(i.re, t(w.R()), w.R());
                    !a.ub && Dc(a.ef, s)
                };
                b.Lb = function(i, f) {
                    var b;
                    if (k) b = c;
                    else {
                        b = g;
                        if (h) {
                            var d = f / h;
                            b = a.nd(d) * (g - e) + e
                        }
                    }
                    w.X(b)
                };
                b.Ib = function(a, d, c, f) {
                    e = a;
                    g = d;
                    h = c;
                    w.X(a);
                    b.X(0);
                    b.Nc(c, f)
                };
                b.qe = function(a) {
                    k = d;
                    c = a;
                    b.Rc(a, j, d)
                };
                b.pe = function(a) {
                    c = a
                };
                w = new Bc;
                w.id(o);
                w.id(n)
            }

            function pc() {
                var c = this,
                    a = Xb();
                b.A(a, 0);
                b.O(a, "pointerEvents", "none");
                c.Z = a;
                c.Ve = function(c) {
                    b.D(a, c);
                    b.r(a)
                };
                c.yb = function() {
                    b.G(a);
                    b.oc(a)
                }
            }

            function xc(o, g) {
                var e = this,
                    q, L, v, k, y = [],
                    x, B, W, G, Q, F, h, w, p;
                m.call(e, -u, u + 1, {});

                function E(a) {
                    q && q.qd();
                    T(o, a, 0);
                    F = d;
                    q = new I.I(o, I, b.Ld(b.j(o, "idle")) || lc);
                    q.X(0)
                }

                function Z() {
                    q.kc < I.kc && E()
                }

                function M(p, r, o) {
                    if (!G) {
                        G = d;
                        if (k && o) {
                            var h = o.width,
                                c = o.height,
                                n = h,
                                m = c;
                            if (h && c && a.qb) {
                                if (a.qb & 3 && (!(a.qb & 4) || h > K || c > J)) {
                                    var j = l,
                                        q = K / J * c / h;
                                    if (a.qb & 1) j = q > 1;
                                    else if (a.qb & 2) j = q < 1;
                                    n = j ? h * J / c : K;
                                    m = j ? J : c * K / h
                                }
                                b.k(k, n);
                                b.l(k, m);
                                b.H(k, (J - m) / 2);
                                b.L(k, (K - n) / 2)
                            }
                            b.u(k, "absolute");
                            f.i(i.oe, g)
                        }
                    }
                    b.G(r);
                    p && p(e)
                }

                function Y(b, c, d, f) {
                    if (f == S && s == g && N)
                        if (!Cc) {
                            var a = t(b);
                            A.kf(a, g, c, e, d);
                            c.ne();
                            U.Mb(a - U.Cd() - 1);
                            U.X(a);
                            z.Ib(b, b, 0)
                        }
                }

                function cb(b) {
                    if (b == S && s == g) {
                        if (!h) {
                            var a = j;
                            if (A)
                                if (A.ib == g) a = A.pf();
                                else A.yb();
                            Z();
                            h = new vc(o, g, a, q);
                            h.td(p)
                        }!h.Ic() && h.cc()
                    }
                }

                function R(d, f, l) {
                    if (d == g) {
                        if (d != f) C[f] && C[f].me();
                        else !l && h && h.le();
                        p && p.rd();
                        var m = S = b.S();
                        e.ob(b.F(j, cb, m))
                    } else {
                        var k = c.min(g, d),
                            i = c.max(g, d),
                            o = c.min(i - k, k + r - i),
                            n = u + a.se - 1;
                        (!Q || o <= n) && e.ob()
                    }
                }

                function db() {
                    if (s == g && h) {
                        h.kb();
                        p && p.ke();
                        p && p.ie();
                        h.wd()
                    }
                }

                function eb() {
                    s == g && h && h.kb()
                }

                function ab(a) {
                    !P && f.i(i.he, g, a)
                }

                function O() {
                    p = w.pInstance;
                    h && h.td(p)
                }
                e.ob = function(c, a) {
                    a = a || v;
                    if (y.length && !G) {
                        b.r(a);
                        if (!W) {
                            W = d;
                            f.i(i.ge, g);
                            b.e(y, function(a) {
                                if (!b.z(a, "src")) {
                                    a.src = b.j(a, "src2");
                                    b.Y(a, a["display-origin"])
                                }
                            })
                        }
                        b.Md(y, k, b.F(j, M, c, a))
                    } else M(c, a)
                };
                e.fe = function() {
                    var h = g;
                    if (a.xd < 0) h -= r;
                    var d = h + a.xd * tc;
                    if (D & 2) d = t(d);
                    if (!(D & 1)) d = c.max(0, c.min(d, r - u));
                    if (d != g) {
                        if (A) {
                            var e = A.hf(r);
                            if (e) {
                                var i = S = b.S(),
                                    f = C[t(d)];
                                return f.ob(b.F(j, Y, d, f, e, i), v)
                            }
                        }
                        bb(d)
                    }
                };
                e.lc = function() {
                    R(g, g, d)
                };
                e.me = function() {
                    p && p.ke();
                    p && p.ie();
                    e.yd();
                    h && h.ee();
                    h = j;
                    E()
                };
                e.ne = function() {
                    b.G(o)
                };
                e.yd = function() {
                    b.r(o)
                };
                e.de = function() {
                    p && p.rd()
                };

                function T(a, c, e) {
                    if (b.z(a, "jssor-slider")) return;
                    if (!F) {
                        if (a.tagName == "IMG") {
                            y.push(a);
                            if (!b.z(a, "src")) {
                                Q = d;
                                a["display-origin"] = b.Y(a);
                                b.G(a)
                            }
                        }
                        b.cb() && b.A(a, (b.A(a) || 0) + 1)
                    }
                    var f = b.Db(a);
                    b.e(f, function(f) {
                        var h = f.tagName,
                            i = b.j(f, "u");
                        if (i == "player" && !w) {
                            w = f;
                            if (w.pInstance) O();
                            else b.a(w, "dataavailable", O)
                        }
                        if (i == "caption") {
                            if (c) {
                                b.zc(f, b.j(f, "to"));
                                b.Xe(f, b.j(f, "bf"));
                                b.j(f, "3d") && b.Re(f, "preserve-3d")
                            } else if (!b.jd()) {
                                var g = b.N(f, l, d);
                                b.Qb(g, f, a);
                                b.Gb(f, a);
                                f = g;
                                c = d
                            }
                        } else if (!F && !e && !k) {
                            if (h == "A") {
                                if (b.j(f, "u") == "image") k = b.af(f, "IMG");
                                else k = b.v(f, "image", d);
                                if (k) {
                                    x = f;
                                    b.Y(x, "block");
                                    b.E(x, V);
                                    B = b.N(x, d);
                                    b.u(x, "relative");
                                    b.tb(B, 0);
                                    b.O(B, "backgroundColor", "#000")
                                }
                            } else if (h == "IMG" && b.j(f, "u") == "image") k = f;
                            if (k) {
                                k.border = 0;
                                b.E(k, V)
                            }
                        }
                        T(f, c, e + 1)
                    })
                }
                e.hc = function(c, b) {
                    var a = u - b;
                    Zb(L, a)
                };
                e.ib = g;
                n.call(e);
                b.ae(o, b.j(o, "p"));
                b.Te(o, b.j(o, "po"));
                var H = b.v(o, "thumb", d);
                if (H) {
                    b.N(H);
                    b.G(H)
                }
                b.r(o);
                v = b.N(fb);
                b.A(v, 1e3);
                b.a(o, "click", ab);
                E(d);
                e.bc = k;
                e.zd = B;
                e.xc = o;
                e.Xb = L = o;
                b.D(L, v);
                f.Ab(203, R);
                f.Ab(28, eb);
                f.Ab(24, db)
            }

            function vc(y, g, p, q) {
                var a = this,
                    n = 0,
                    u = 0,
                    h, j, e, c, k, t, r, o = C[g];
                m.call(a, 0, 0);

                function v() {
                    b.oc(L);
                    cc && k && o.zd && b.D(L, o.zd);
                    b.r(L, !k && o.bc)
                }

                function w() {
                    a.cc()
                }

                function x(b) {
                    r = b;
                    a.kb();
                    a.cc()
                }
                a.cc = function() {
                    var b = a.mb();
                    if (!B && !M && !r && s == g) {
                        if (!b) {
                            if (h && !k) {
                                k = d;
                                a.wd(d);
                                f.i(i.je, g, n, u, h, c)
                            }
                            v()
                        }
                        var l, p = i.Ad;
                        if (b != c)
                            if (b == e) l = c;
                            else if (b == j) l = e;
                        else if (!b) l = j;
                        else l = a.ud();
                        f.i(p, g, b, n, j, e, c);
                        var m = N && (!E || F);
                        if (b == c)(e != c && !(E & 12) || m) && o.fe();
                        else(m || b != e) && a.Nc(l, w)
                    }
                };
                a.le = function() {
                    e == c && e == a.mb() && a.X(j)
                };
                a.ee = function() {
                    A && A.ib == g && A.yb();
                    var b = a.mb();
                    b < c && f.i(i.Ad, g, -b - 1, n, j, e, c)
                };
                a.wd = function(a) {
                    p && b.rb(jb, a && p.yc.xf ? "" : "hidden")
                };
                a.hc = function(b, a) {
                    if (k && a >= h) {
                        k = l;
                        v();
                        o.yd();
                        A.yb();
                        f.i(i.ue, g, n, u, h, c)
                    }
                    f.i(i.De, g, a, n, j, e, c)
                };
                a.td = function(a) {
                    if (a && !t) {
                        t = a;
                        a.Ab($JssorPlayer$.Hd, x)
                    }
                };
                p && a.Wb(p);
                h = a.ic();
                a.Wb(q);
                j = h + q.hd;
                e = h + q.sd;
                c = a.ic()
            }

            function Kb(a, c, d) {
                b.L(a, c);
                b.H(a, d)
            }

            function Zb(c, b) {
                var a = x > 0 ? x : eb,
                    d = zb * b * (a & 1),
                    e = Ab * b * (a >> 1 & 1);
                Kb(c, d, e)
            }

            function Pb() {
                pb = M;
                Ib = z.ud();
                G = w.R()
            }

            function gc() {
                Pb();
                if (B || !F && E & 12) {
                    z.kb();
                    f.i(i.ve)
                }
            }

            function ec(f) {
                if (!B && (F || !(E & 12)) && !z.Ic()) {
                    var d = w.R(),
                        b = c.ceil(G);
                    if (f && c.abs(H) >= a.fd) {
                        b = c.ceil(d);
                        b += hb
                    }
                    if (!(D & 1)) b = c.min(r - u, c.max(b, 0));
                    var e = c.abs(b - d);
                    e = 1 - c.pow(1 - e, 5);
                    if (!P && pb) z.Ed(Ib);
                    else if (d == b) {
                        sb.de();
                        sb.lc()
                    } else z.Ib(d, b, e * Vb)
                }
            }

            function Hb(a) {
                !b.j(b.Ub(a), "nodrag") && b.Nb(a)
            }

            function rc(a) {
                Yb(a, 1)
            }

            function Yb(a, c) {
                a = b.Ec(a);
                var k = b.Ub(a);
                if (!O && !b.j(k, "nodrag") && sc() && (!c || a.touches.length == 1)) {
                    B = d;
                    yb = l;
                    S = j;
                    b.a(g, c ? "touchmove" : "mousemove", Bb);
                    b.S();
                    P = 0;
                    gc();
                    if (!pb) x = 0;
                    if (c) {
                        var h = a.touches[0];
                        ub = h.clientX;
                        vb = h.clientY
                    } else {
                        var e = b.Dc(a);
                        ub = e.x;
                        vb = e.y
                    }
                    H = 0;
                    gb = 0;
                    hb = 0;
                    f.i(i.Le, t(G), G, a)
                }
            }

            function Bb(e) {
                if (B) {
                    e = b.Ec(e);
                    var f;
                    if (e.type != "mousemove") {
                        var l = e.touches[0];
                        f = {
                            x: l.clientX,
                            y: l.clientY
                        }
                    } else f = b.Dc(e);
                    if (f) {
                        var j = f.x - ub,
                            k = f.y - vb;
                        if (c.floor(G) != G) x = x || eb & O;
                        if ((j || k) && !x) {
                            if (O == 3)
                                if (c.abs(k) > c.abs(j)) x = 2;
                                else x = 1;
                            else x = O;
                            if (mb && x == 1 && c.abs(k) - c.abs(j) > 3) yb = d
                        }
                        if (x) {
                            var a = k,
                                i = Ab;
                            if (x == 1) {
                                a = j;
                                i = zb
                            }
                            if (!(D & 1)) {
                                if (a > 0) {
                                    var g = i * s,
                                        h = a - g;
                                    if (h > 0) a = g + c.sqrt(h) * 5
                                }
                                if (a < 0) {
                                    var g = i * (r - u - s),
                                        h = -a - g;
                                    if (h > 0) a = -g - c.sqrt(h) * 5
                                }
                            }
                            if (H - gb < -2) hb = 0;
                            else if (H - gb > 2) hb = -1;
                            gb = H;
                            H = a;
                            rb = G - H / i / (Y || 1);
                            if (H && x && !yb) {
                                b.Nb(e);
                                if (!M) z.qe(rb);
                                else z.pe(rb)
                            }
                        }
                    }
                }
            }

            function ab() {
                qc();
                if (B) {
                    B = l;
                    b.S();
                    b.K(g, "mousemove", Bb);
                    b.K(g, "touchmove", Bb);
                    P = H;
                    z.kb();
                    var a = w.R();
                    f.i(i.Ke, t(a), a, t(G), G);
                    E & 12 && Pb();
                    ec(d)
                }
            }

            function jc(c) {
                if (P) {
                    b.gf(c);
                    var a = b.Ub(c);
                    while (a && v !== a) {
                        a.tagName == "A" && b.Nb(c);
                        try {
                            a = a.parentNode
                        } catch (d) {
                            break
                        }
                    }
                }
            }

            function Jb(a) {
                C[s];
                s = t(a);
                sb = C[s];
                Ub(a);
                return s
            }

            function Dc(a, b) {
                x = 0;
                Jb(a);
                f.i(i.Je, t(a), b)
            }

            function Ub(a, c) {
                wb = a;
                b.e(T, function(b) {
                    b.sc(t(a), a, c)
                })
            }

            function sc() {
                var b = i.gd || 0,
                    a = X;
                if (mb) a & 1 && (a &= 1);
                i.gd |= a;
                return O = a & ~b
            }

            function qc() {
                if (O) {
                    i.gd &= ~X;
                    O = 0
                }
            }

            function Xb() {
                var a = b.vb();
                b.E(a, V);
                b.u(a, "absolute");
                return a
            }

            function t(a) {
                return (a % r + r) % r
            }

            function kc(b, d) {
                if (d)
                    if (!D) {
                        b = c.min(c.max(b + wb, 0), r - u);
                        d = l
                    } else if (D & 2) {
                    b = t(b + wb);
                    d = l
                }
                bb(b, a.Sb, d)
            }

            function xb() {
                b.e(T, function(a) {
                    a.rc(a.Cb.zf <= F)
                })
            }

            function hc() {
                if (!F) {
                    F = 1;
                    xb();
                    if (!B) {
                        E & 12 && ec();
                        E & 3 && C[s].lc()
                    }
                }
            }

            function Ec() {
                if (F) {
                    F = 0;
                    xb();
                    B || !(E & 12) || gc()
                }
            }

            function ic() {
                V = {
                    T: K,
                    V: J,
                    f: 0,
                    g: 0
                };
                b.e(Q, function(a) {
                    b.E(a, V);
                    b.u(a, "absolute");
                    b.rb(a, "hidden");
                    b.G(a)
                });
                b.E(fb, V)
            }

            function ob(b, a) {
                bb(b, a, d)
            }

            function bb(g, f, j) {
                if (Rb && (!B && (F || !(E & 12)) || a.Kc)) {
                    M = d;
                    B = l;
                    z.kb();
                    if (f == k) f = Vb;
                    var e = Cb.mb(),
                        b = g;
                    if (j) {
                        b = e + g;
                        if (g > 0) b = c.ceil(b);
                        else b = c.floor(b)
                    }
                    if (D & 2) b = t(b);
                    if (!(D & 1)) b = c.max(0, c.min(b, r - u));
                    var i = (b - e) % r;
                    b = e + i;
                    var h = e == b ? 0 : f * c.abs(i);
                    h = c.min(h, f * u * 1.5);
                    z.Ib(e, b, h || 1)
                }
            }
            f.Rc = function() {
                if (!N) {
                    N = d;
                    C[s] && C[s].lc()
                }
            };

            function W() {
                return b.k(y || p)
            }

            function lb() {
                return b.l(y || p)
            }
            f.gb = W;
            f.fb = lb;

            function Eb(c, d) {
                if (c == k) return b.k(p);
                if (!y) {
                    var a = b.vb(g);
                    b.Cc(a, b.Cc(p));
                    b.lb(a, b.lb(p));
                    b.Y(a, "block");
                    b.u(a, "relative");
                    b.H(a, 0);
                    b.L(a, 0);
                    b.rb(a, "visible");
                    y = b.vb(g);
                    b.u(y, "absolute");
                    b.H(y, 0);
                    b.L(y, 0);
                    b.k(y, b.k(p));
                    b.l(y, b.l(p));
                    b.zc(y, "0 0");
                    b.D(y, a);
                    var h = b.Db(p);
                    b.D(p, y);
                    b.O(p, "backgroundImage", "");
                    b.e(h, function(c) {
                        b.D(b.j(c, "noscale") ? p : a, c);
                        b.j(c, "autocenter") && Mb.push(c)
                    })
                }
                Y = c / (d ? b.l : b.k)(y);
                b.Ue(y, Y);
                var f = d ? Y * W() : c,
                    e = d ? c : Y * lb();
                b.k(p, f);
                b.l(p, e);
                b.e(Mb, function(a) {
                    var c = b.Kd(b.j(a, "autocenter"));
                    b.Jd(a, c)
                })
            }
            f.Ge = Eb;
            n.call(f);
            f.Z = p = b.pb(p);
            var a = b.C({
                qb: 0,
                se: 1,
                Vb: 1,
                pc: 0,
                nc: l,
                Hb: 1,
                Bb: d,
                Kc: d,
                xd: 1,
                Xc: 3e3,
                Zc: 1,
                Sb: 500,
                nd: e.xe,
                fd: 20,
                ad: 0,
                s: 1,
                bd: 0,
                Fe: 1,
                jc: 1,
                dd: 1
            }, fc);
            a.Bb = a.Bb && b.rf();
            if (a.Me != k) a.Xc = a.Me;
            if (a.Ee != k) a.bd = a.Ee;
            var eb = a.jc & 3,
                tc = (a.jc & 4) / -4 || 1,
                kb = a.He,
                I = b.C({
                    I: q,
                    Bb: a.Bb
                }, a.uf);
            I.sb = I.sb || I.tf;
            var Fb = a.Be,
                Z = a.Ae,
                db = a.vf,
                R = !a.Fe,
                y, v = b.v(p, "slides", R),
                fb = b.v(p, "loading", R) || b.vb(g),
                Nb = b.v(p, "navigator", R),
                dc = b.v(p, "arrowleft", R),
                ac = b.v(p, "arrowright", R),
                Lb = b.v(p, "thumbnavigator", R),
                oc = b.k(v),
                mc = b.l(v),
                V, Q = [],
                uc = b.Db(v);
            b.e(uc, function(a) {
                if (a.tagName == "DIV" && !b.j(a, "u")) Q.push(a);
                else b.cb() && b.A(a, (b.A(a) || 0) + 1)
            });
            var s = -1,
                wb, sb, r = Q.length,
                K = a.ze || oc,
                J = a.ye || mc,
                Wb = a.ad,
                zb = K + Wb,
                Ab = J + Wb,
                bc = eb & 1 ? zb : Ab,
                u = c.min(a.s, r),
                jb, x, O, yb, T = [],
                Qb, Sb, Ob, cc, Cc, N, E = a.Zc,
                lc = a.Xc,
                Vb = a.Sb,
                qb, tb, ib, Rb = u < r,
                D = Rb ? a.Hb : 0,
                X, P, F = 1,
                M, B, S, ub = 0,
                vb = 0,
                H, gb, hb, Cb, w, U, z, Tb = new pc,
                Y, Mb = [];
            if (a.Bb) Kb = function(a, c, d) {
                b.zb(a, {
                    jb: c,
                    eb: d
                })
            };
            N = a.nc;
            f.Cb = fc;
            ic();
            b.z(p, "jssor-slider", d);
            b.A(v, b.A(v) || 0);
            b.u(v, "absolute");
            jb = b.N(v, d);
            b.Qb(jb, v);
            if (kb) {
                cc = kb.wf;
                qb = kb.I;
                tb = u == 1 && r > 1 && qb && (!b.jd() || b.vc() >= 8)
            }
            ib = tb || u >= r || !(D & 1) ? 0 : a.bd;
            X = (u > 1 || ib ? eb : -1) & a.dd;
            var Gb = v,
                C = [],
                A, L, Db = b.nf(),
                mb = Db.Pe,
                G, pb, Ib, rb;
            Db.kd && b.O(Gb, Db.kd, ([j, "pan-y", "pan-x", "none"])[X] || "");
            U = new zc;
            if (tb) A = new qb(Tb, K, J, kb, mb);
            b.D(jb, U.Xb);
            b.rb(v, "hidden");
            L = Xb();
            b.O(L, "backgroundColor", "#000");
            b.tb(L, 0);
            b.Qb(L, Gb.firstChild, Gb);
            for (var cb = 0; cb < Q.length; cb++) {
                var wc = Q[cb],
                    yc = new xc(wc, cb);
                C.push(yc)
            }
            b.G(fb);
            Cb = new Ac;
            z = new nc(Cb, U);
            if (X) {
                b.a(v, "mousedown", Yb);
                b.a(v, "touchstart", rc);
                b.a(v, "dragstart", Hb);
                b.a(v, "selectstart", Hb);
                b.a(g, "mouseup", ab);
                b.a(g, "touchend", ab);
                b.a(g, "touchcancel", ab);
                b.a(h, "blur", ab)
            }
            E &= mb ? 10 : 5;
            if (Nb && Fb) {
                Qb = new Fb.I(Nb, Fb, W(), lb());
                T.push(Qb)
            }
            if (Z && dc && ac) {
                Z.Hb = D;
                Z.s = u;
                Sb = new Z.I(dc, ac, Z, W(), lb());
                T.push(Sb)
            }
            if (Lb && db) {
                db.pc = a.pc;
                Ob = new db.I(Lb, db);
                T.push(Ob)
            }
            b.e(T, function(a) {
                a.qc(r, C, fb);
                a.Ab(o.fc, kc)
            });
            b.O(p, "visibility", "visible");
            Eb(W());
            b.a(v, "click", jc, d);
            b.a(p, "mouseout", b.mc(hc, p));
            b.a(p, "mouseover", b.mc(Ec, p));
            xb();
            a.Vb && b.a(g, "keydown", function(b) {
                if (b.keyCode == 37) ob(-a.Vb);
                else b.keyCode == 39 && ob(a.Vb)
            });
            var nb = a.pc;
            if (!(D & 1)) nb = c.max(0, c.min(nb, r - u));
            z.Ib(nb, nb, 0)
        };
    i.he = 21;
    i.Le = 22;
    i.Ke = 23;
    i.te = 24;
    i.re = 25;
    i.ge = 26;
    i.oe = 27;
    i.ve = 28;
    i.Ne = 202;
    i.Je = 203;
    i.je = 206;
    i.ue = 207;
    i.De = 208;
    i.Ad = 209;
    var o = {
            fc: 1
        },
        r = function(e, C) {
            var f = this;
            n.call(f);
            e = b.pb(e);
            var s, A, z, r, k = 0,
                a, m, i, w, x, h, g, q, p, B = [],
                y = [];

            function v(a) {
                a != -1 && y[a].Od(a == k)
            }

            function t(a) {
                f.i(o.fc, a * m)
            }
            f.Z = e;
            f.sc = function(a) {
                if (a != r) {
                    var d = k,
                        b = c.floor(a / m);
                    k = b;
                    r = a;
                    v(d);
                    v(b)
                }
            };
            f.rc = function(a) {
                b.r(e, a)
            };
            var u;
            f.qc = function(D) {
                if (!u) {
                    s = c.ceil(D / m);
                    k = 0;
                    var o = q + w,
                        r = p + x,
                        n = c.ceil(s / i) - 1;
                    A = q + o * (!h ? n : i - 1);
                    z = p + r * (h ? n : i - 1);
                    b.k(e, A);
                    b.l(e, z);
                    for (var f = 0; f < s; f++) {
                        var C = b.ce();
                        b.Fc(C, f + 1);
                        var l = b.Nd(g, "numbertemplate", C, d);
                        b.u(l, "absolute");
                        var v = f % (n + 1);
                        b.L(l, !h ? o * v : f % i * o);
                        b.H(l, h ? r * v : c.floor(f / (n + 1)) * r);
                        b.D(e, l);
                        B[f] = l;
                        a.ac & 1 && b.a(l, "click", b.F(j, t, f));
                        a.ac & 2 && b.a(l, "mouseover", b.mc(b.F(j, t, f), l));
                        y[f] = b.ec(l)
                    }
                    u = d
                }
            };
            f.Cb = a = b.C({
                pd: 10,
                od: 10,
                md: 1,
                ac: 1
            }, C);
            g = b.v(e, "prototype");
            q = b.k(g);
            p = b.l(g);
            b.Gb(g, e);
            m = a.ld || 1;
            i = a.hb || 1;
            w = a.pd;
            x = a.od;
            h = a.md - 1;
            a.tc == l && b.z(e, "noscale", d);
            a.nb && b.z(e, "autocenter", a.nb)
        },
        t = function(a, g, h) {
            var c = this;
            n.call(c);
            var r, q, e, f, i;
            b.k(a);
            b.l(a);

            function k(a) {
                c.i(o.fc, a, d)
            }

            function p(c) {
                b.r(a, c || !h.Hb && e == 0);
                b.r(g, c || !h.Hb && e >= q - h.s);
                r = c
            }
            c.sc = function(b, a, c) {
                if (c) e = a;
                else {
                    e = b;
                    p(r)
                }
            };
            c.rc = p;
            var m;
            c.qc = function(c) {
                q = c;
                e = 0;
                if (!m) {
                    b.a(a, "click", b.F(j, k, -i));
                    b.a(g, "click", b.F(j, k, i));
                    b.ec(a);
                    b.ec(g);
                    m = d
                }
            };
            c.Cb = f = b.C({
                ld: 1
            }, h);
            i = f.ld;
            if (f.tc == l) {
                b.z(a, "noscale", d);
                b.z(g, "noscale", d)
            }
            if (f.nb) {
                b.z(a, "autocenter", f.nb);
                b.z(g, "autocenter", f.nb)
            }
        };

    function q(e, d, c) {
        var a = this;
        m.call(a, 0, c);
        a.qd = b.Jc;
        a.hd = 0;
        a.sd = c
    }
    jssor_1_slider_init = function() {
        var g = [{
                Fb: 700,
                B: 2,
                Eb: {
                    Fb: 1e3,
                    B: 2
                }
            }],
            j = {
                nc: d,
                Sb: 800,
                nd: f.Ie,
                He: {
                    I: s,
                    sb: g,
                    Fd: 1
                },
                Ae: {
                    I: t
                },
                Be: {
                    I: r
                }
            },
            e = new i("jssor_1", j);

        function k() {
            var d = b.bf(e.Z, "slides");
            if (d) {
                var c = d[1];
                if (c) {
                    var a = b.v(c, "ad");
                    if (!a) {
                        a = b.vb();
                        b.lb(a, "position:absolute;top:0px;right:0px;width:80px;height:20px;background-color:rgba(255,255,140,0.5);font-size: 12px;line-height: 20px;text-align:center;");
                        b.Fc(a, "Jssor Slider");
                        b.D(c, a)
                    }
                }
            }
        }
        k();

        function a() {
            var b = e.Z.parentNode.clientWidth;
            if (b) {
                b = c.min(b, 720);
                e.Ge(b)
            } else h.setTimeout(a, 30)
        }
        a();
        b.a(h, "load", a);
        b.a(h, "resize", a);
        b.a(h, "orientationchange", a)
    }
})(window, document, Math, null, true, false)

jssor_1_slider_init();
