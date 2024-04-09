---
date: "2000-03-11 12:00:00"
title: "Visualization of the Expansion Theorem for the Krall Polynomials in a Weighted Sobolev Space"
lang: "en"
MathJax: true
---


## <a name="MapleAutoBookmark1">1. Synopsis

The study of _orthogonal polynomials_ within the framework of the _spectral theory of differential operators_ brings together
_two branches of mathematics in such a manner that advantages for development are to be discerned in both areas_
(<a href="#[EL]">[EL]</a>, p. 21).
On the one hand, the classical differential operators with orthogonal polynomial solutions present excellent examples for the spectral theory of singular differential operators in Hilbert space, in which the eigenfunctions are explicitly known. On the other hand, we understand many properties of orthogonal polynomials better, if we observe that these polynomials are the eigenfunctions of an unbounded self-adjoint Hilbert space operator.

In the paper <a href="#[V2]">[V2]</a> and in the present work we study the
<a href="#3.">Krall polynomials</a> which have been discovered in 1981 by Lance L. Littlejohn (<a href="#[L1]">[L1]</a>).
These polynomials are orthogonal both in a space $L^2([-1,1],m)$ of Lebesgue-Stieltjes-integrable functions and in a
<a href="#4.">weighted Sobolev space</a> $W(-1,1)$ of the order three. On the interval $(-1,1)$ the Krall polynomials are eigenfunctions of the
<a href="#5.">sixth-order Legendre type differential equation</a>, which gives the connection to the spectral theory of singular differential operators.
In <a href="#[V2]">[V2]</a> we have considered this differential operator in the weighted Sobolev space $W(-1,1)$.
Especially we have found a self-adjoint realization of the corresponding maximal operator by means of
<a href="#5.">two boundary conditions</a>. As a main result we prove theorems on
<a href="#expansion thm. 1">eigenfunction expansions</a> both with respect to the weighted Sobolev norm and with respect to locally uniform convergence.

In this work we put the main focus on visualizing some of the results in
<a href="#[V2]">[V2]</a>. The calculations and plots here are made with the program  Maple V Release 5, actually, this whole document is a Maple worksheet. At first, we take a look at the
<a href="#3.">Krall polynomials</a> and display their graphs. After having introduced the
<a href="#4.">weighted Sobolev scalar product</a> in the space $W(-1,1)$ we define the
<a href="#5.">Fourier series</a> corresponding to the Krall polynomials. We then
<a href="#Visualization 1">visualize</a> the property of the Krall polynomials that their Fourier series approximates the functions in $W(-1,1)$ locally uniformly and simultaneously up to the second derivative.
Some <a href="#6.">general remarks</a> on the interplay of orthogonal polynomials and spectral theory with a few <a href="#6.">historical notes</a> conclude our work.


## 2. References

<a name="[EL]">__[EL]__ W.N. Everitt and L.L. Littlejohn: 
_Orthogonal Polynomials and Spectral Theory: A Survey,_
Orthogonal Polynomials and their Applications, C. Brezinski, L. Gori and A. Ronveaux (Editors), Proceedings of the third International Symposium held in Erice, Italy 1990 (1991), pp. 21-55.

<a name="[ELLo]">__[ELLo]__ W.N. Everitt, L.L. Littlejohn, and S.M. Loveland: 
_Some Properties of the Sixth-Order Legendre-Type Differential Expression,_
Rendiconti di Matematica, Serie VII, Vol. 13 (1993), pp.773-799.

<a name="[L1]">__[L1]__ Lance L. Littlejohn: 
_Nonclassical Orthogonal Polynomials and Differential Equations,_
Ph. D. Thesis, The Pennsylvania State University, State College, PA, USA (1981).

<a name="[L2]">__[L2]__ Lance L. Littlejohn: 
_The Krall Polynomials: A New Class of Orthogonal Polynomials,_
Quaestiones Mathematicae, Vol. 5 (1982), pp. 255-265.

<a name="[LK]">__[LK]__ Lance L. Littlejohn and Allan M. Krall, 
_Orthogonal Polynomials and Higher Order Singular Sturm-Liouville Systems,_
Acta Applicandae Mathematicae 17 (1989), pp. 99-170.

<a name="[Lo]">__[Lo]__ Susan Marie Loveland: 
_Spectral Analysis of the Legendre Equations,_
Dissertation, Utah State University, Logan (1990).

<a name="[V1]">__[V1]__ Rolf Vonhoff: 
_A Left-Definite Study of Legendre's Differential Equation and of the Fourth-Order Legendre Type Differential Equation,_
to appear in Results in Mathematics, 42pp.

<a name="[V2]">__[V2]__ Rolf Vonhoff: 
_The Sixth-Order Legendre Type Differential Operator in a Weighted Sobolev Space,_
Preprint (2000), 32 pp.


## <a name="3.">3. The Krall Polynomials

The Krall polynomials have been discovered by Lance L. Littlejohn in 1981 and they are named after H.L. Krall (see
<a href="#[L1]">[L1]</a> and <a href="#[L2]">[L2]</a>).
Certain remarks indicate that these polynomials already had been discovered by H.L. Krall himself and that they were rediscovered by Littlejohn (cf. the note on p. 115 of the paper
<a href="#[LK]">[LK]</a> by Littlejohn and A.M. Krall), but no publication of H.L. Krall on these polynomials is known.

__Definition__ of the _Krall polynomials_:
($n$ - degree of the polynomial, $A,B$ - positive parameters, $x$ - independent variable)

This definition gives the general Krall polynomial $K(n,A,B,.)$ of degree n corresponding to the parameters $A,B>0$.
For concrete evaluations, for example when plotting the polynomials, we choose special values for $A,B$, e.g., $A=1, B=10$.

```Mathematica
> K := ((n,A,B,x) -> sum('(-1)^floor(j/2)
    *(2*n-j)!/(2^(n+1)*(n-floor((j+1)/2))!
    *floor(j/2)!*(n-j)!*(n*(n+1)+A+B))* ((1+(-1)^j)
    / 2 * (n^2*(n^2+2*A+2*B-1)+4*A*B
    +2*j*(n*(n+1)+A+B)) + (1-(-1)^j)/2 * 4*(B-A)) *x^(n-j)',
    'j'=0..n));
```
![](*<?=$rbase?>*/img/LT6EXP1.gif)
![](*<?=$rbase?>*/img/LT6EXP2.gif)

In order to give an idea of the construction of these polynomials, we shall list the first four Krall polynomials explicitly.
```Mathematica
> array(1..4,1..1,[[K(0,A,B,x)],[sort(simplify(K(1,A,B,x)))],
    [sort(simplify(K(2,A,B,x)))],[sort(simplify(K(3,A,B,x)))]]);
```
![](*<?=$rbase?>*/img/LT6EXP3.gif)

We now plot the graphs of the first nine Krall polynomials. Observe that these polynomials are not symmetric, if $A$ is not equal to $B$.
```Mathematica
> with(plots);
```
![](*<?=$rbase?>*/img/LT6EXP4.gif)
![](*<?=$rbase?>*/img/LT6EXP5.gif)
![](*<?=$rbase?>*/img/LT6EXP6.gif)
![](*<?=$rbase?>*/img/LT6EXP7.gif)
![](*<?=$rbase?>*/img/LT6EXP8.gif)

```Mathematica
> kp0:= plot(K(0,1,10,x), x=-1..1):
kp1:= plot(K(1,1,10,x), x=-1..1):
kp2:= plot(K(2,1,10,x), x=-1..1):
kp3:= plot(K(3,1,10,x), x=-1..1):
kp4:= plot(K(4,1,10,x), x=-1..1):
kp5:= plot(K(5,1,10,x), x=-1..1):
kp6:= plot(K(6,1,10,x), x=-1..1):
kp7:= plot(K(7,1,10,x), x=-1..1):
kp8:= plot(K(8,1,10,x), x=-1..1):
display(array(1..3,1..3,
  [[kp0,kp1,kp2],[kp3,kp4,kp5],[kp6,kp7,kp8]]));
```
![](*<?=$rbase?>*/img/LT6EXP9.gif)

<a name="Legendre type polynomials">In the case $A=B$ the Krall polynomials $K(n,A,A,.)$ coincide with the _Legendre type polynomials_
$P(n,A,.)$ corresponding to the fourth-order Legendre type differential equation (cf. <a href="#[V1]">[V1]</a> and section 5 of
<a href="#[V2]">[V2]</a> for details). These polynomials are symmetric: they are even or odd depending on the degree of the polynomial.

We list the first nine Legendre type polynomials.
```Mathematica
> array(1..9,1..1,[[K(0,A,A,x)],[sort(simplify(K(1,A,A,x)))],
  [sort(simplify(K(2,A,A,x)))],[sort(simplify(K(3,A,A,x)))],
  [sort(simplify(K(4,A,A,x)))],[sort(simplify(K(5,A,A,x)))],
  [sort(simplify(K(6,A,A,x)))],[sort(simplify(K(7,A,A,x)))],
  [sort(simplify(K(8,A,A,x)))]]);
```
![](*<?=$rbase?>*/img/LT6EXP10.gif)

We plot the first nine graphs in the case A=B=1.
```Mathematica
> lp0:= plot(K(0,1,1,x), x=-1..1):
  lp1:= plot(K(1,1,1,x), x=-1..1):
  lp2:= plot(K(2,1,1,x), x=-1..1):
  lp3:= plot(K(3,1,1,x), x=-1..1):
  lp4:= plot(K(4,1,1,x), x=-1..1):
  lp5:= plot(K(5,1,1,x), x=-1..1):
  lp6:= plot(K(6,1,1,x), x=-1..1):
  lp7:= plot(K(7,1,1,x), x=-1..1):
  lp8:= plot(K(8,1,1,x), x=-1..1):
  display(array(1..3,1..3,
    [[lp0,lp1,lp2],[lp3,lp4,lp5],[lp6,lp7,lp8]]));
```
![](*<?=$rbase?>*/img/LT6EXP11.gif)


## <a name="4.">4. The Weighted Sobolev Space

The _weighted Sobolev space_
$W(-1,1)$ consists of all functions $u:(-1,1)\to\mathbb{C}$,
such that $u, u', u''$ are locally absolutely continuous on the interval $(-1,1)$ and such that the functions $u, u', \sqrt{1-x^2} u'', (1-x^2)^{3/2} u'''$ are square-integrable on $(-1,1)$ with respect to Lebesgue's measure. We shall point out, that this vector space contains the ordinary Sobolev space $W^2_3(-1,1)$ of the order 3, in which all the functions $u, u', u'', u'''$ exist and are square-integrable on $(-1,1)$. However, since the weights $\sqrt{1-x^2}$ and $(1-x^2)^{3/2}$ vanish at the end points $1$ and $-1$, the space $W^2_3(-1,1)$ is a
_proper_ subspace of our weighted Sobolev space $W(-1,1)$. For example, the
<a href="#function g">function g</a> below is in $W(-1,1)$ and has a third derivative $g'''$ which is not square-integrable on $(-1,1)$, and the
<a href="#function h">function h</a> below is in $W(-1,1)$ with a non square-integrable second derivative $h''$.

In the space $W(-1,1)$ the following scalar product $\hbox{wip}(. , .)$ is given, which is defined by means of a so called
_Dirichlet integral_ plus some boundary values.

__Definition__ of the scalar product $\hbox{wip}( . , . )$ in $W(-1,1)$:
* $u,v$ - functions in $W(-1,1)$,
* $A,B$ - positive parameters

We shall mention that the weight functions corresponding to the second and the third derivatives in the integral below vanish at the boundary of $(-1,1)$. This corresponds with the fact that the <a href="#differential operator">sixth-order Legendre type differential equation</a> is _singular_, since the weights in our scalar product are given by the coefficients of the differential operator.

Observe again that this scalar product $\hbox{wip}( . , . , A,B)$ depends on the choice of the positive parameters $A,B$.

The following definition gives the _real_ version of the scalar product.
Since we are going to study only real-valued functions, it suffices to introduce
this simpler version, in general we have to replace `diff(v,x$k)` by `conjugate(diff(v,x$k))` for `k=0..3`.
```Mathematica
> wip := (u,v,A,B) -> int( u * v
+ (6*(A+B+2*A*B)*(1-x^2)+12*B*(1-x)+12*A*(1+x)+24)
   * diff(u,x) * diff(v,x)
+ (1-x^2)*(12+(3*A+3*B+6)*(1-x^2))
   * diff(u,x$2) * diff(v,x$2)
+ (1-x^2)^3 * diff(u,x$3) * diff(v,x$3), x=-1..1)
+ 1/A * subs( x=-1, u) * subs( x=-1, v)
+ 1/B * subs( x=1, u) * subs( x=1, v);
```
![](*<?=$rbase?>*/img/LT6EXP12.gif)
![](*<?=$rbase?>*/img/LT6EXP13.gif)
![](*<?=$rbase?>*/img/LT6EXP14.gif)

<a name="Sobolev inequality">In <a href="#[V2]">[V2]</a>, Theorem 2.1 we have obtained the following result, in which we use the notation
$\|f\|_J := \sup\\{ \left|f(x)\right|, x \in J \\}$ for continuous functions $f:(-1,1)\to\mathbb{C}$
and compact intervals $J\subseteq (-1,1)$.

__Theorem.__ _The space $(W(-1,1), wip( . , . ))$ is a Hilbert space and for every compact interval $J \subseteq (-1,1)$ there exists a constant $C(J)>0$ such that_
$$
    ||u||_J + ||u'||_J + ||u''||_J \le C(J) \sqrt{\hbox{wip}(u,u)}
$$
_holds for all $u\in W(-1,1)$._

This _weighted Sobolev inequality_ extends the well known Sobolev inequality from the
space $W^2_3(-1,1)$. It is the essential tool to deduce
<a href="#expansion thm. 1">locally uniform expansions</a> for the functions in $W(-1,1)$ and their first two derivatives from weighted Sobolev norm expansions.

__Examples:__ We give some examples for evaluations of the scalar product.
```Mathematica
> wip(x,(1-x)^2*ln(1-x),A,B);
```
![](*<?=$rbase?>*/img/LT6EXP15.gif)

Especially we can establish that the Krall polynomials are _pairwise orthogonal_ with respect to the scalar product $\hbox{wip}( . , . )$.
This result is an easy consequence of the considerations in <a href="#[V2]">[V2]</a>, since it is proved that the Krall polynomials are the eigenfunctions of an
<a href="#differential operator">unbounded self-adjoint operator</a> in the Hilbert space $W(-1,1)$.

```Matheamtica
> wip(K(0,A,B,x),K(0,A,B,x),A,B);
```
![](*<?=$rbase?>*/img/LT6EXP16.gif)
```Mathematica
> simplify(%);
```
![](*<?=$rbase?>*/img/LT6EXP17.gif)
```Mathematica
> simplify(wip(K(1,A,B,x),K(2,A,B,x),A,B));
```
![](*<?=$rbase?>*/img/LT6EXP18.gif)
```Mathematica
> wip(K(3,1,10,x),K(7,1,10,x),1,10);
```
![](*<?=$rbase?>*/img/LT6EXP19.gif)

We shall now consider some typical examples of functions in the weighted Sobolev space $W(-1,1)$.

__Examples:__

__(a)__ Clearly, in addition to every polynomial also every $u$ in $C^3[-1,1]$ is a function in the space $W(-1,1)$.
More generally, <a href="#4.">$W^2_3(-1,1)$</a> is a subspace of $W(-1,1)$.


<a name="function g">__(b)__ In general, every function $u$ in $W(-1,1)$ can continuously be extended onto the closed interval $[-1,1]$ (see Lemma 3.1 of
<a href="#[V2]">[V2]</a>. However, the higher-order derivatives of $u$ need not be bounded on the interval $(-1,1)$. To illustrate this effect we introduce the following function $g$, which is in $W(-1,1)$ and has an unbounded second derivative near $x=1$.
```Mathematica
> g := x -> (1-x)^2*ln(1-x);
```
![](*<?=$rbase?>*/img/LT6EXP20.gif)
```Mathematica
> diff(g(x), x);
```
![](*<?=$rbase?>*/img/LT6EXP21.gif)
```Mathematica
> diff(g(x), x$2);
```
![](*<?=$rbase?>*/img/LT6EXP22.gif)

We shall plot the graphs of g and its first three derivatives.
```Mathematica
> gp0:= plot( g(x), x=-1..1 ):
  gp1:= plot( diff(g(x),x), x=-1..1 ):
  gp2:= plot( diff(g(x),x$2), x=-1..1):
  gp3:= plot( diff(g(x),x$3), x=-1..1):
  display(array(1..2,1..2, [[gp0,gp1],[gp2,gp3]]));
```
![](*<?=$rbase?>*/img/LT6EXP23.gif)

<a name="function h">__(c)__ A second example will display the fact,
that even the first derivative of a function in $W(-1,1)$ may be unbounded.

```Mathematica
> h:= x-> int(ln(1-ln(1-t)),t=-1..x);
```
![](*<?=$rbase?>*/img/LT6EXP24.gif)
```Mathematica
> diff(h(x),x);
```
![](*<?=$rbase?>*/img/LT6EXP25.gif)
```Mathematica
> diff(h(x),x$2);
```
![](*<?=$rbase?>*/img/LT6EXP26.gif)
```Mathematica
> simplify(diff(h(x),x$3));
```
![](*<?=$rbase?>*/img/LT6EXP27.gif)
```Mathematica
> hp0:= plot( h(x), x=-1..1 ):
  hp1:= plot( diff(h(x),x), x=-1..1 ):
  hp2:= plot( diff(h(x),x$2), x=-1..1):
  hp3:= plot( diff(h(x),x$3), x=-1..1 ):
  display(array(1..2,1..2, [[hp0,hp1],[hp2,hp3]]));
```
![](*<?=$rbase?>*/img/LT6EXP28.gif)

## <a name="5.">5. The Expansion Theorem

The Krall polynomials are _the eigenfunctions_ of the following _boundary eigenvalue problem_
in the <a href="#4.">weighted Sobolev space</a> $W(-1,1)$:
$$
-((1-x^2)^3 u''')''' + ((1-x^2)(12+(3A+3B+6)(1-x^2)) u'')'' - (\Pi(x)u')' + u = \lambda u,
$$
$$
24 B u''(1) + 24 (A+1) B u'(1) + u(1) = \lambda u(1),
$$
$$
24 A u''(-1) - 24 A (B+1) u'(-1) + u(-1) = \lambda u(-1),
$$
in which
$$
    \Pi(x) = 6 (A+B+2AB) (1-x^2) + 12 B (1-x) + 12 A (1+x) + 24,
$$
and $\lambda$ denotes the eigenvalue parameter, and $u:(-1,1)\to\mathbb{C}$
is a function in $W(-1,1)$, such that the derivatives $u^{(i)}$ are locally absolutely continuous in the interval $(-1,1)$ for every $i = 0,...,5$  (for details cf.
<a href="#[V2]">[V2]</a>, Theorems 4.2 and 6.1).

The _eigenvalue_ $\lambda(n,A,B)$ corresponding to the $n$th Krall polynomial $K(n,A,B, . )$ and is given by
$$
\eqalign{
   \lambda(n,A,B) &= n(n-1)(n-2)(n-3)(n-4)(n-5) \cr
                  &\quad   {} + 18 n(n-1)(n-2)(n-3)(n-4) + 3 (A+B+32) n(n-1)(n-2)(n-3) \cr
                  &\quad   {} + 24 (A+B+7) n(n-1)(n-2) + 3 (4AB+14A+14B+24) n(n-1) \cr
                  &\quad   {} + 12 (2AB+A+B) n + 1. \cr
}
$$

<a name="differential operator">The above differential operator
$$
    l(u) := -((1-x^2)^3 u''')''' + ((1-x^2)(12+(3A+3B+6)(1-x^2)) u'')'' - (\Pi(x)u')' + u
$$
is called the _sixth-order Legendre type differential operator_, it has been introduced by Littlejohn in <a href="#[L1]">[L1]</a>.
In <a href="#[V2]">[V2]</a> we have shown, that the operator $S: D(S)\to W(-1,1)$, $Su := l(u)$, in which the domain of definition $D(S)$
is a restriction of the maximal domain in $W(-1,1)$ by means of the above boundary conditions, is an unbounded self-adjoint operator
such that our boundary eigenvalue problem can equivalently be written in the form
$$
    Su = \lambda u,
$$
for $u\in D(S)$. This operator $S$ has a purely discrete spectrum consisting of the simple eigenvalues $\lambda(n,A,B)$ for $n\in\mathbb{N}$.
So, the Krall polynomials form a complete orthogonal system of eigenfunctions in the Hilbert space $W(-1,1)$ and every function $u\in W(-1,1)$
has a Fourier series expansion in terms of the normalized Krall polynomials (see <a href="#[V2]">[V2]</a>, Theorems 6.1 and 6.2).

In general, norm expansions do not imply
<a href="#expansion thm. 1">pointwise expansions</a>. However, in Theorem 2.1 of
<a href="#[V2]">[V2]</a> we have proved a
<a href="#Sobolev inequality">weighted Sobolev inequality</a> for the functions in $W(-1,1)$.
An application of this inequality yields that the Fourier series and its first two derivatives
converge locally uniformly on $(-1,1)$ to the corresponding derivatives of the function $u$.
The convergence of the Fourier series itself actually is uniform on the entire interval (see Theorem 6.4 of <a href="#[V2]">[V2]</a>).

In the sequel we introduce the Fourier series corresponding to the Krall polynomials in W(-1,1) and display its approximation property. Although the denseness of the linear span of the Krall polynomials in the weighted Sobolev space W(-1,1) can be proved independently of the spectral theory (cf. Lemma 5.3 and the references given in section 1 of
<a href="#[V2]">[V2]</a>), we shall point out, that the Fourier series provides a
_constructive approximation_ of the functions in $W(-1,1)$.

It is this constructiveness which enables our visualizations.

__Definition__ of the $N$-th partial sum of the Fourier series correponding to the Krall polynomials in $(W(-1,1), \hbox{wip}( . , . )$:
* $f$ - function in $W(-1,1)$,
* $N$ - degree of the partial sum,
* $A,B$ - positive parameters,
* $x$ - independent variable

As it was the case with the Krall polynomials and the scalar product in $W(-1,1)$ this series depends on the choice of the parameters $A,B > 0$.
For special applications below we will choose concrete values, e.g., $A=1, B=10$.

```Mathematica
> krallseries := (f,N,A,B,x) ->
  sum( '1/(wip(K(n,A,B,x),K(n,A,B,x),A,B))'
       * 'wip(f,K(n,A,B,x),A,B)' * 'K(n,A,B,x)', n=0..N);
```
![](*<?=$rbase?>*/img/LT6EXP29.gif)
![](*<?=$rbase?>*/img/LT6EXP30.gif)

We calculate the first partial sums of the Fourier series of the
<a href="#function g">function $g$</a>, where $g(x) = (1-x)^2 \ln(1-x)$, which has been defined in section 4:

```Mathematica
> seq(sort(simplify(krallseries(g(x),i,1,10,x))), i=0..3);
```
![](*<?=$rbase?>*/img/LT6EXP31.gif)
![](*<?=$rbase?>*/img/LT6EXP32.gif)

<a name="Visualization 1">At first, we visualize the
<a href="#function g">function g</a> and the first four partial sums of the
approximating Fourier series corresponding to the Krall polynomials.

```Mathematica
> plot( [g(x), seq(krallseries(g(x),i,1,10,x),i=0..3)], x=-1..1,
      color=[black,blue,green,red,yellow],
      title=`g(x) = (1-x)^2 ln(1-x) and the first partial sums of the Fourier series of g` );
```
![](*<?=$rbase?>*/img/LT6EXP33.gif)

Next we display the <a href="#function g">derivative g'</a> and the derivatives
of the first five partial sums of the approximating Fourier series with respect to the Krall polynomials.
```Mathematica
> diff(g(x),x);
```
![](*<?=$rbase?>*/img/LT6EXP34.gif)
```Mathematica
> plot(
  [diff(g(x),x), seq(diff(krallseries(g(x),i,1,10,x),x),i=0..4)],
           x=-1..1,
      color=[black,blue,green,red,yellow,pink],
   title=`g' and the derivatives of the first partial sums of the Fourier series of g` );
```
![](*<?=$rbase?>*/img/LT6EXP35.gif)

We now visualize the
<a href="#function g">second derivative g''</a> and the second derivatives of the first six partial sums of the approximating Fourier series corresponding to the Krall polynomials. We shall point out, that g'' is unbounded near the boundary x=1.

```Mathematica
> diff(g(x),x$2);
```
![](*<?=$rbase?>*/img/LT6EXP36.gif)
```Mathematica
> plot(
  [diff(g(x),x$2), seq(diff(krallseries(g(x),i,1,10,x),x$2),i=0..5)],
           x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy],
   title=`g'' and the second derivatives of the first partial sums of the Fourier series of g` );
```
![](*<?=$rbase?>*/img/LT6EXP37.gif)

Finally, we plot the <a href="#function g">third derivative of g</a> and the third derivatives
of the first seven partial sums of the Fourier series corresponding to the Krall polynomials.
```Mathematica
diff(g(x),x$3);
```
![](*<?=$rbase?>*/img/LT6EXP38.gif)
```Mathematica
plot( [diff(g(x),x$3), seq(diff(krallseries(g(x),i,1,10,x),x$3),i=0..6)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy,turquoise],
      title=`g''' and the third derivatives of the first partial sums of the Fourier series of g` );
```
![](*<?=$rbase?>*/img/LT6EXP39.gif)

__Summary__ of the preceding four plots:

```Mathematica
> ep0:= plot( [g(x), seq(krallseries(g(x),i,1,10,x),i=0..3)], x=-1..1,
      color=[black,blue,green,red,yellow], title=`g, g(x) = (1-x)^2 ln(1-x) ` ):
  ep1:= plot( [diff(g(x),x), seq(diff(krallseries(g(x),i,1,10,x),x),i=0..4)], x=-1..1,
      color=[black,blue,green,red,yellow,pink], title=`g'` ):
  ep2:= plot( [diff(g(x),x$2), seq(diff(krallseries(g(x),i,1,10,x),x$2),i=0..5)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy], title=`g''` ):
  ep3:= plot( [diff(g(x),x$3), seq(diff(krallseries(g(x),i,1,10,x),x$3),i=0..6)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy,turquoise], title=`g'''` ):
  display(array(1..2,1..2, [[ep0,ep1],[ep2,ep3]]));
```
![](*<?=$rbase?>*/img/LT6EXP40.gif)

The first three plots in this summary visualize the result on the locally uniform expansion
of the functions in $W(-1,1)$ in terms of their Fourier series, which is proved in
Theorem 6.4 of <a href="#[V2]">[V2]</a>:

<a name="expansion thm. 1">__Theorem.__ _Every function $u\in W(-1,1)$ and the first two derivatives $u'$, $u''$ are
locally uniformly approximated on the interval $(-1,1)$ by the corresponding derivatives of the partial sums of the
Fourier series corresponding to the Krall polynomials._

As the remark to Theorem 6.4 shows, the approximation of $u$ indeed holds uniformly on the entire interval $(-1,1)$.
The functions $u\in W(-1,1)$ admit their boundary values in $1$ and $-1$
(see Lemma 3.1 of <a href="#[V2]">[V2]</a>) and in this sense
the expansion in terms of the Krall polynomials also holds in $x=1$ and $x=-1$.
On the other hand the first and the second derivative of the functions in $W(-1,1)$ may be unbounded
near the boundary of $(-1,1)$ and therefore in general these functions can not be approximated uniformly
on $(-1,1)$ by polynomials. For instance, our
<a href="#function g">function g</a> above, $g(x) = (1-x)^2 \ln(1-x)$, has an unbounded second-order derivative, while the 
<a href="#function h">function h</a> from section 4 even has an unbounded first-order derivative.


The fourth plot above displays $g'''$ and the third derivatives of the partial sums of the Fourier series. In this case the approximation seems to be worse and indeed, the theory in
<a href="#[V2]">[V2]</a> does not give such a result for abitrary functions in the weighted Sobolev space $W(-1,1)$. If, additionally the function u is in the domain of definition $D(S)$ of the corresponding
<a href="#differential operator">self-adjoint operator S</a>, then our Theorem 6.5 in
<a href="#[V2]">[V2]</a> gives the following result on the locally uniform simultaneous approximation of the first eight derivatives:


__Theorem.__ _Every function $u$ in $D(S)$ and its first eight derivatives can locally uniformly be expanded
in terms of the corresponding derivatives of the Fourier series corresponding to the Krall polynomials._

Observe that the <a href="#function g">function g</a> given by $g(x) = (1-x)^2 \ln(1-x)$ does not belong to the domain $D(S)$.

<a name="function g2">In a second visualization of the approximation property of the Krall polynomials we study the following function g2.

```Mathematica
> g2 := x -> (1-x^2)^2*ln(1-x^2);
```
![](*<?=$rbase?>*/img/LT6EXP41.gif)

The oscillation of the <a href="#function g2">graph of g2</a> makes it necessary to consider partial sums up to the order 6 to obtain a suitable approximation.

```Mathematica
> plot( [g2(x), seq(krallseries(g2(x),i,1,10,x),i=0..7)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy,turquoise,red],
      title=`g2(x) = (1-x^2)^2 ln(1-x^2) and the first partial sums of the Fourier series of g2` );
```
![](*<?=$rbase?>*/img/LT6EXP42.gif)

The plot shows that the 4th partial sum (pink) nearly coincides with the 5th partial sum (navy), and that the 6th partial sum (turquoise) almost agrees with the 7th partial sum (red). This correponds with the fact, that the (normalized) odd order Fourier coefficients of g2 are small in relation to the even order Fourier coefficients:

```Mathematica
> seq( evalf(wip(g2(x),K(i,1,10,x),1,10)/wip(K(i,1,10,x),
    K(i,1,10,x),1,10),2), i=0..12);
```
![](*<?=$rbase?>*/img/LT6EXP43.gif)

The cause of this effect clearly is the symmetry of the
<a href="#function g2">function g2</a>. Since g2 is an even function, since the
<a href="#3.">Krall polynomials</a> to the parameters $A=1$ and $B=10$ are
_almost even or odd,_ respectively, in dependence of their degree, and since the
<a href="#4.">weighted Sobolev scalar product</a> as well is
_nearly symmetric,_ we can expect such a behaviour. In the case $A=B$ of the
<a href="#Legendre type polynomials">Legendre type polynomials</a> we obtain
full symmetry and therefore we exactly have $\hbox{wip}(g2(x),K(i,1,1,x),1,1) = 0$ for all odd $i$:

```Mathematica
> seq( evalf(wip(g2(x), K(i,1,1,x),1,1)/wip(K(i,1,1,x),
    K(i,1,1,x),1,1),2), i=0..12);
```
![](*<?=$rbase?>*/img/LT6EXP44.gif)

We now turn back to the general Fourier series corresponding to the polynomials K(n,1,10, . ). Again, we obtain approximations of the
<a href="#function g2">derivative g2'</a> as well by means of the derivatives of the Fourier series.

```Mathematica
> diff(g2(x),x);
```
![](*<?=$rbase?>*/img/LT6EXP45.gif)
```Mathematica
plot( [diff(g2(x),x), seq(diff(krallseries(g2(x),i,1,10,x),x),i=0..6)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy,turquoise],
      title=`g2' and the derivatives of the first partial sums of the Fourier series of g2` );
```
![](*<?=$rbase?>*/img/LT6EXP46.gif)

Finally, we visualize the approximation of the <a href="#function g2">second derivative g2''</a>.

```Mathematica
> diff(g2(x),x$2);
```
![](*<?=$rbase?>*/img/LT6EXP47.gif)
```Mathematica
> plot( [diff(g2(x),x$2), seq(diff(krallseries(g2(x),i,1,10,x),x$2),i=0..8)], x=-1..1,
      color=[black,blue,green,red,yellow,pink,navy,turquoise,red,green],
      title=`g2'' and the second derivatives of the first partial sums of the Fourier series of g2` );
```
![](*<?=$rbase?>*/img/LT6EXP48.gif)

Observe that the second derivative g2'' is unbounded at both end points of the interval $(-1,1)$. But nevertheless, the second derivative of the eighth partial sum of the Fourier series corresponding to the Krall polynomials supplies a suitable locally uniform approximation of this function.

## <a name="6.">6. Conclusion

Simply speaking, mathematics is a matter of _ideas_.

The
<i>idea of orthogonal polynomials</i>
is quite old. It was in the year 1782 when A.M. Legendre has discovered the now called Legendre polynomials in a work on the attraction exerted by solids of revolution (
<a href="#[Le1]">[Le1]</a>). A few years later he established the orthogonality of these polynomials and used the fact that they satisfy an ordinary differential equation of second order (cf. <a href="#[Le2]">[Le2]</a>, <a href="#[Le3]">[Le3]</a>).
Almost 200 years later, Littlejohn has discovered the
<a href="#3.">Krall polynomials</a>, which are closely connected with Legendre's polynomials, and thereby settled another member into the now large family of orthogonal polynomials (<a href="#[L1]">[L1]</a>).

In the meantime, the _spectral theory of singular differential operators_
had well been developed. The origins of this _idea_
can be found in the work of H. Weyl from the early 20th century. Already Weyl has studied the second order differential equations with orthogonal polynomial solutions in this respect (see e.g. his example on the Gaussian differential equation in &#167;2 of his paper
<a href="#[W]">[W]</a>, which in some sense comprises Legendre's differential equation). Later, Titchmarsh (1940) and Glasmann (about 1950) have studied the classical orthogonal polynomials, including Legendre's polynomials, in the framework of spectral theory of differential operators in more detail (cf. here also the introduction of the survey paper
<a href="#[EL]">[EL]</a>). Their monographs _Eigenfunction Expansions Associated with Second-Order Differential Equations_
(<a href="#[T]">[T]</a>) and _Theorie der linearen Operatoren im Hilbert-Raum_
(<a href="#[AG]">[AG]</a>) are still the basic references in this subject.

Till now, the interplay of orthogonal polynomials and spectral theory provides a broad field for mathematical activity. We hope, our visualizations given above may help to expound some more of the underlying _ideas._


## 7. Historical References

<a name="[AG]">__[AG]__ N.I. Achieser and I.M. Glasmann: 
_Theorie der linearen Operatoren im Hilbert-Raum,_ 8., erw. Aufl., hg. von H. Baumgärtel, Thun, Frankfurt am Main 1981.

<a name="[Le1]">__[Le1]__ Adrien-Marie Legendre: 
_Recherches sur l'attraction des sph&#233;roides homog&#232;nes,_
M&#233;moires de math&#233;matique et de physique, pr&#233;sent&#233;s &#224; l'Acad&#233;mie Royale des Sciences par divers savans et lus dans ses assembl&#233;es, Acad&#233;mie des Sciences (Paris), Vol. 10 (1785), pp. 411-434.

<a name="[Le2]">__[Le2]__ Adrien-Marie Legendre: 
_Recherches sur la figure des plan&#232;tes,_
M&#233;moires de math&#233;matique et de physique, tir&#232;s des reg. de l'Acad&#233;mie des Sciences, 1784 (1787), pp. 370-389.

<a name="[Le3]">__[Le3]__ Adrien-Marie Legendre: 
_Suite des Recherches sur la Figure des Plan&#232;tes,_
Histoire de l'Acad&#233;mie Royale des Sciences avec les M&#233;moires de Math&#233;matique et de Physique, Paris 1789 (1793), pp. 372-454.

<a name="[T]">__[T]__ E.C. Titchmarsh:
_Eigenfunction Expansions Associated with Second-Order Differential Equations, Part I, Part II,_
Vol. I (2nd Ed.), Oxford 1962, Vol. II Oxford 1958.


<a name="[W]">__[W]__ Hermann Weyl:
_Über gewöhnliche lineare Differentialgleichungen mit singulären Stellen und ihre Eigenfunktionen (2. Note),_
Nachrichten der Königlichen Gesellschaft der Wissenschaften zu Göttingen. Mathematisch-physikalische Klasse (1910), pp. 442-467.



