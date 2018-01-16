$(function() {
  var insert = {},
    queryBtn,
    meText,
    inBtn,
    robotText,
    delBtn,
    delLookBtn,
    modLookBbtn,
    texts,
    flag = 0,
    modMeText,
    modRobotText,
    lastMeText,
    modBtn;

  insert = {
    init: function() {
      this.in();
      this.query();
      this.del();
      this.mod();
    },
    show(data) {
      var box = $('<div class="tips">' + data + "</div>");
      $("body").prepend(box);
      $(".tips").show(1000);
      setTimeout(function() {
        $(".tips").animate(
          {
            top: "-40px"
          },
          1000
        );
      }, 1000);
    },
    in: function() {
      inBtn = $("#in-btn");
      inBtn.click(function() {
        flag = 0;
        meText = $("#meText").val();
        robotText = $("#robotText").val();
        if (meText == "" || robotText == "") {
          alert("都要输入！");
        } else {
          $.ajax({
            url: "./php/in.php",
            type: "POST",
            data: {
              meText: meText,
              robotText: robotText
            },
            success: function(data) {
              insert.show(data);
            }
          });
        }
        $("#meText").val("");
        $("#robotText").val("");
        insert.queryFn();
      });
    },
    queryFn: function() {
      if (flag == 0) {
        $("#query-show table").html("");
        $.ajax({
          url: "./php/query.php",
          type: "GET",
          success: function(data) {
            var result = "<tr><td>id</td><td>me</td><td>robot</td></tr>";
            result += data;
            $("#query-show table").html(result);
            insert.show("查询成功");
          }
        });
        flag = 1;
      } else {
        $("#query-show table").html("");
        flag = 0;
      }
    },
    query: function() {
      queryBtn = $("#query-btn");
      queryBtn.click(insert.queryFn);
    },
    del: function() {
      delLookBtn = $("#del-look-btn");
      delLookBtn.click(function() {
        texts = $("#del-text").val();
        $.ajax({
          url: "./php/look.php",
          type: "POST",
          data: {
            texts: texts
          },
          success: function(data) {
            if (data == 0) {
              data = "不存在此值";
            } else {
              var result = "<tr><td>id</td><td>me</td><td>robot</td></tr>";
              result += data;
              $("#del-show table").html(result);
              data = "查询成功";
            }
            insert.show(data);
          }
        });
      });
      delBtn = $("#del-btn");
      delBtn.click(function() {
        delText = $("#del-text").val();
        var delConfirm = confirm("确定删除？");
        if (delConfirm) {
          $.ajax({
            url: "./php/del.php",
            type: "POST",
            data: {
              delText: delText
            },
            success: function(data) {
              insert.show(data);
            }
          });
          flag = 0;
          insert.queryFn();
          $("#del-show table").html("数据已不存在");
          $("#del-text").val("");
        } else {
          return false;
        }
      });
    },
    mod: function() {
      modLookBbtn = $("#mod-look-btn");
      modBtn = $("#mod-btn");
      modLookBbtn.click(function() {
        texts = $("#mod-look-text").val();
        $.ajax({
          url: "./php/look.php",
          type: "POST",
          data: {
            texts: texts
          },
          success: function(data) {
            if (data == 0) {
              data = "不存在此值";
            } else {
              var result = "<tr><td>id</td><td>me</td><td>robot</td></tr>";
              result += data;
              $("#mod-show table").html(result);
              data = "查询成功";
            }
            insert.show(data);
          }
        });
        $("#del-text").val("");
      });
			console.log(1)
      modBtn.click(function() {
        lastMeText = $("#mod-look-text").val();
        modMeText = $("#mod-me-text").val();
				modRobotText = $("#mod-robot-text").val();
				console.log(lastMeText,modMeText,modRobotText)
        if (!(modMeText || modRobotText || lastMeText)) {
					insert.show('请填写完整！');
          return;
        } else {
          $.ajax({
            url: "./php/mod.php",
            type: "POST",
            data: {
              lastMeText,
              modMeText,
              modRobotText
            },
            success: function(data) {
              insert.show(data);
            }
          });
          $("#mod-me-text").val("");
          $("#mod-robot-text").val("");
          flag = 0;
          insert.queryFn();
        }
      });
    }
  };
  insert.init();
});
