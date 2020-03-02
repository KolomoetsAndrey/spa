$(document).ready(function(){
	var pathname = $(location).attr('pathname');
	var splitpath = pathname.split('/');
	var realpathname = splitpath[1];
	
	var getArr = [];
	$('.header_menu_link').each(function() {
		var getmenuname = $(this).attr('href');
		var splitmenuname = getmenuname.slice(1);
		getArr.push(splitmenuname);
	});
	
	var getresult = $.inArray(realpathname, getArr);
	
	if (getresult === -1) {
		return getresult;
	} else {
		$('.header_menu_link').each(function() {
			var getmenuhrefnew = $(this).attr('href');
			var splitgetmenuhrefnew = getmenuhrefnew.slice(1);
			if (splitgetmenuhrefnew === realpathname) {
				$(this).attr("class", "active");
			} else {
				return getresult;
			}
		});
	};
	
});

$(document).ready(function(){
    var menuwidth = document.getElementById("container").clientWidth;
    var hafmenuwidth = menuwidth / 2;
    var mainmenu = document.getElementById("mainmenu");
    mainmenu.style.setProperty('width', menuwidth + 'px' );
    mainmenu.style.setProperty('--haf-mainmenu', '-' + hafmenuwidth + 'px');
});

window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("toTop").style.display = "block";
    } else {
    document.getElementById("toTop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }
})

// Main Menu
function openNav() {
    var x = window.matchMedia("(max-width:900px)");

    if (x.matches) {
        document.getElementById("header_menu_mobile").style.width = "100%";
        document.getElementById("header_menu_mobile").style.background = "#44261C";
    } else {
        document.getElementById("header_menu_mobile").style.width = "80%";
        document.getElementById("header_menu_mobile").style.background = "#44261C";
    }
};
    
function closeNav() {
    document.getElementById("header_menu_mobile").style.width = "0";
    document.getElementById("header_menu_mobile").style.background = "transparent";
};

// Phone Menu
function openPhone() {
    var x = window.matchMedia("(max-width:900px)");

    if (x.matches) {
        document.getElementById("phone_mobile").style.width = "100%";
        document.getElementById("phone_mobile").style.background = "#44261C";
    } else {
        document.getElementById("phone_mobile").style.width = "80%";
        document.getElementById("phone_mobile").style.background = "#44261C";
    }
};
    
function closePhone() {
    document.getElementById("phone_mobile").style.width = "0";
    document.getElementById("phone_mobile").style.background = "transparent";
};

function getMonthToday() {
	var month = new Array();
	month[0] = "january";
	month[1] = "february";
	month[2] = "march";
	month[3] = "april";
	month[4] = "may";
	month[5] = "june";
	month[6] = "july";
	month[7] = "august";
	month[8] = "september";
	month[9] = "october";
	month[10] = "november";
	month[11] = "december";

	var d = new Date();
	var n = month[d.getMonth()];
	$('.month').html("<span>" + n + "</span>");
};

getMonthToday();

$('.day_block').click(function() {
	$('.date').each(function(k) {
		$(this).attr("id", "thedate" + (k+1));
	});
	
	$('.time').each(function(j) {
		$(this).attr("id", "time" + (j+1));
	});
	
	var getTheTimeClick = $(this).text();
	var tempArr = getTheTimeClick.replace(/\s/g, "").slice(0, 5);
	$('.time').html("<span>" + tempArr + "</span>");
	$('#your-date').val(tempArr);
	
	var polandMonth = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
	var getDateArr = tempArr.split('.');
	var getDateMonth = getDateArr[1] - 1;
	var getDateText = polandMonth[getDateMonth];
	$('.month').html("<span>" + getDateText + "</span>");
});

$('.toreserved').click(function() {
	var getYourTime = $('.toreserved').html();
	var timeStr = getYourTime.toString();
	$('#your-time').val(timeStr);
	console.log(timeStr);
});

$('#reserve').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data('whatever');
  var rectime = button.data('time');
  var modal = $(this);
  modal.find('.modal_body #your-staff').val(recipient);
  modal.find('.modal_body #your-time').val(rectime);
});

//Pads
$("form .source").each(function(i) {
	$(this).addClass("source-" + (i+1));
});

$('.target').each(function(e) {
	$(this).addClass("target-" + (e+1));
});

$('.times ul li').each(function() {
	$(this).addClass('toreserved');
});

$('.toreserved').each(function() {
	$getText = $(this).text();
	$needText = 'Zajęty';
	if ($getText.includes($needText)) {
		$(this).addClass('noclick');
	} else {
		$(this).removeClass('noclick');
	}
});

var HIDDEN_CLASS_NAME = 'hidden';
var TARGET_CLASS_NAME = 'target';
var SOURCE_CLASS_NAME = 'source';

var targetIdToShow = 1;

function main() {
	var targets = getElements(TARGET_CLASS_NAME);
	var sources = getElements(SOURCE_CLASS_NAME);
	sources.forEach(function (sourceNode) {
		var sourceNodeId = extractId(sourceNode, SOURCE_CLASS_NAME);
		sourceNode.addEventListener('click', function () {
			showTarget(targets, sourceNodeId);
		});
	});
	showTarget(targets, targetIdToShow);
};

function getElements(type) {
	return [].slice.call(document.querySelectorAll('.' + type)).sort(function (targetNode1, targetNode2) {
		var target1Num = extractId(targetNode1, TARGET_CLASS_NAME);
		var target2Num = extractId(targetNode2, TARGET_CLASS_NAME);
		return target1Num > target2Num;
	});
};

function extractId(targetNode, baseClass) {
	var currentClassIndex = targetNode.classList.length;
	while (currentClassIndex--) {
		var currentClass = targetNode.classList.item(currentClassIndex);
		var maybeIdNum = parseInt(currentClass.split('-')[1]);
		if (isNaN(maybeIdNum)) {
			continue
		};
		var classStrinToValidate = baseClass + '-' + maybeIdNum;
		if (classStrinToValidate === currentClass) {
			return maybeIdNum;
		};
	};
};

function showTarget(targets, targetId) {
	targets.forEach(function (targetNode, targetIndex) {
    var currentTargetNodeId = extractId(targetNode, TARGET_CLASS_NAME);
		if (currentTargetNodeId === targetId) {
			targetNode.classList.remove(HIDDEN_CLASS_NAME);
		} else {
			targetNode.classList.add(HIDDEN_CLASS_NAME);
		};
	});
};

main();