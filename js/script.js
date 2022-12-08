$(function () {
  // -----------------------ハンバーガーボタン
  $("#nav-btn").on("click", function () {
    $(this).toggleClass("-active");
    $(".header-nav").toggleClass("-active");
    $("body").toggleClass("-active");
  });

  // -----------------------Twitterボタン
  $(".header-twitter").on("click", function () {
    alert("This is not available now.");
  });

  // --------------------------------トップへ戻るボタン
  const pageTop = $("#page-top");
  const pageTop2 = $("#header-logo");
  // ボタン非表示
  pageTop.hide();

  // 80pxスクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      // 0.3秒でフェードイン
      pageTop.fadeIn(300);
    } else {
      // 0.3秒でフェードアウト
      pageTop.fadeOut(300);
    }
  });
  // 0.5秒でページトップへ戻る
  pageTop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
  pageTop2.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });

  //スクロールによるヘッダーの出し入れ//
  var headerArea = $("#top-header");
  // ボタン非表示
  headerArea.hide();

  // 500pxスクロールしたらヘッダー表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      // 0.3秒でスライドイン
      headerArea.slideDown(500);
    } else {
      // 0.3秒でスライドアウト
      headerArea.slideUp(500);
    }
  });

  //floatのJavaScript//
  Splitting();
});

/*挨拶文のセクションまでスクロールされた時に、「.isView」というクラスを付与する機能*/
ScrollTrigger.create({
  trigger: "#greeting",
  start: "top center",
  toggleClass: "isView",
  // 一度クラスがついたら消えないようにする
  once: true,
});
/*「SERVICE」セクションまでスクロールされた時に、「.isView」というクラスを付与する機能*/
ScrollTrigger.create({
  trigger: "#service",
  start: "top center",
  toggleClass: "isView",
  // 一度クラスがついたら消えないようにする
  once: true,
});
/*「WORKS」セクションまでスクロールされた時に、「.isView」というクラスを付与する機能*/
ScrollTrigger.create({
  trigger: "#works",
  start: "top center",
  toggleClass: "isView",
  // 一度クラスがついたら消えないようにする
  once: true,
});
/*「BLOG」セクションまでスクロールされた時に、「.isView」というクラスを付与する機能*/
ScrollTrigger.create({
  trigger: "#customer-reviews",
  start: "top center",
  toggleClass: "isView",
  // 一度クラスがついたら消えないようにする
  once: true,
});
/*「CONTACT」セクションまでスクロールされた時に、「.isView」というクラスを付与する機能*/
ScrollTrigger.create({
  trigger: "#contact",
  start: "top center",
  toggleClass: "isView",
  // 一度クラスがついたら消えないようにする
  once: true,
});
