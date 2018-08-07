$(document).ready(function() {
    $('#registerform')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
            	//用户名验证
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 24,
                            message: '用户名长度不能小于6位或超过24位'
                        }
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必填不能为空'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度不能小于6位'
                        }
                    }
                },
                //确认密码
                password2: {
                    validators: {
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //一致性的验证： identical完全相同
                        identical: {
	                        field: 'password1', //与那个字段做比较
	                        message: '两次密码输入不一致'
	                    }
                    }
                },
                //真实姓名
                realname:{
                	validators:{
                		notEmpty: {
                            message: '姓名不能为空'
                        }
                	}
                },
                //手机号码
                mobile:{
                	validators:{
                		notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //正则表达式的验证
                        regexp: {
				           regexp: /^[1][3,4,5,7,8,9][0-9]{9}$/,
				           message: '手机号码格式不正确，格式：13900000000'
	                    }
                	}
                },
                //性别的验证
                sex: {
                	validators:{
                		notEmpty: {
                            message: '请选择性别'
                        }
                	}
                },
                //同意注册协议
                isAgree: {
                	validators: {
                		//多个中必须选择一个
//              		choice: {
//	                        min: 1,
//                          max: 3, 
//	                        message: '请选择查看注册协议并同意'
//	                    },
						notEmpty: {
                            message: '请选择查看注册协议并同意'
                        }
                	}
                }
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');
            
            // 使用ajax发送提交表单的数据请求lll
            var postUrl="api/userAdd.php";
            var postData=$form.serialize();// 取到表单的值并发送ajax请求到后端
            console.log(postData);
            
            
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData ,function(result) {
                console.log("ajax返回的结果",result);
                //根据ajax返回的结果处理前端的业务逻辑
                //
                //注册成功或者失败后弹出模态框定义
                $("#myModal .modal-title").text("用户注册提示");
                if(result.isSuccess){
                	$("#myModal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg+"<span id='time'>5</span>秒后跳转");
                	//弹出模态框
                	$("#myModal").modal("show");
                	//计时器
                	var num=5;
                	var timenum=setInterval(function(){
                		num--;
                		$("#time").text(num);
                		if(num==0){
                			clearInterval(timenum);
                			location.href="login.php";
                		}
                	},1000);
                }
                else{
                	$("#myModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>");
                	//弹出模态框
                	$('#myModal').modal('show');
                	console.log(result.msg);
                }
            }, 'json');
        });
});