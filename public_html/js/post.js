$(document).ready(function() {
  $("#register").click(function register() {
    var username = $("#lusername").val();
    var userpassword = $("#lpassword").val();
    var useremail = $("#lemail").val();
    var data = {
      name: username,
      password: userpassword,
      email: useremail
    };
    data = JSON.stringify(data);
    $.ajax({
      type: "POST",

      url: "./api/register.php",
      data: "data=" + data,
      success: function(response, data) {
        if ((response.code = 200)) {
          location.reload();
        }
      },
      error: function(xhr, status, error) {
        alert("There was an error in sending this update");
      }
    }); //ends .ajax function
  }); //ends click handler

  $("#makepost").click(function register() {
    var content = $("#content").val();
    var userFk = $("#metadata").data("userid");

    var data = {
      content: content,
      user_fk: userFk
    };
    data = JSON.stringify(data);
    $.ajax({
      type: "POST",
      url: "./api/makepost.php",
      data: "data=" + data,
      success: function(response, data) {
        if ((response.code = 200)) {
          location.reload();
        }
      },
      error: function(xhr, status, error) {
        alert("There was an error in logging in");
      }
    }); //ends .ajax function
  }); //ends click handler

  $("#login").click(function register() {
    var userpassword = $("#lpassword").val();
    var useremail = $("#email").val();
    var data = {
      password: userpassword,
      email: useremail
    };
    data = JSON.stringify(data);
    $.ajax({
      type: "POST",

      url: "./api/login.php",
      data: "data=" + data,
      success: function(response, data) {
        if ((response.code = 200)) {
          location.reload();
        }
      },
      error: function(xhr, status, error) {
        alert("There was an error in logging in");
      }
    }); //ends .ajax function
  }); //ends click handler
}); //ends document.ready

//functions

/**

  break;om.henosis.pages.EntityClass = (function() {
  function EntityClass(options) {
    this._initialize(options);
    this._attachEvents();
  }

  EntityClass.prototype = {
    //Jquery

    _$userId: null,


    _initialize: function(options) {
      options = options || {};

      for (var memberName in this) {
        var member = this[memberName];
        if (member !== "constructor" && typeof member === "function") {
          this[memberName] = $.proxy(member, this);
        }
      }

      this._$userContainer = $("#metadata").data("user_Id");


    },

    _attachEvents: function() {
      var entity = this;
      this._$changeAddressButton.on("click", this._handleChangeAddressClick);

    },

    // -----------------------
    // Private Methods
    // -----------------------


    //waiting for change about information
    _changeAbout: function() {
      var info = {
        Id: this._$entityId,
        About: $("#change-about-textarea").val()
      };
      var data = JSON.stringify(info);
      // alert($("#change-about-textarea").text());
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "/controllers/api/" + this._$entityType + "/description/put.php",
        data: "data=" + data,
        success: function(response, data) {
          if (data == "success") {
            $("#about")
              .find("p")
              .text(info.About);
          }
        },
        error: function(xhr, status, error) {
          alert("There was an error in sending this update");
        }
      });
    },
    _changeTitle: function() {
      var info = {
        Id: this._$entityId,
        Title: $("#change-title-input").val()
      };
      var data = JSON.stringify(info);

      $.ajax({
        type: "POST",
        dataType: "json",
        url: "/controllers/api/" + this._$entityType + "/title/put.php",
        data: "data=" + data,
        success: function(data, response) {
          $("#title").text(info.Title);
        },
        error: function(xhr, status, error) {
          alert("There was an error in sending this update");
        }
      });
    },

    /**
     * ---------------------------------------
     * Event Handlers
     * ---------------------------------------
     * */
/*
    _handleChangeAboutClick: function(event) {
      this._changeAbout();

  }; //end of prototype definition
  return EntityClass;
})();
new com.henosis.pages.EntityClass({}); //calls specified
/*com.henosis.pages.EventClass.EventClass = (function(){
    function EventClass(options){
        this._initialize(options);
        this._attachEvents();
    }

    EventClass.prototype = {

    }
})*/
