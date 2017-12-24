<<<<<<< HEAD
$(document).ready(function(){$(function(){$("body a").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var n=$(this.hash);if((n=n.length?n:$("[name="+this.hash.slice(1)+"]")).length)return $("html,body").animate({scrollTop:n.offset().top-0},1e3),!1}})}),$(window).on("resize",function(){}),$("#year").html((new Date).getFullYear()),$(".hamburger-menu").on("click",function(){$(".hamburger-menu").toggleClass("open"),$(".hamburger-menu").hasClass("open")?$(".navigation").slideDown():$(".navigation").slideUp()}),$("body").scroll(function(){$offset=$("body").scrollTop(),$(window).width()>330?$("#home").css("background-position","center calc(20% - 35px - "+Math.round(.1*$offset)+"px)"):$("#home").css("background-position","center top")})});
=======
$(document).ready(function(){alert("TEDx Mechelen")});
>>>>>>> bd7179336cc21deae2faff6609b9dbd39ea12dae
