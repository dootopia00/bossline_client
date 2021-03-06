angular.module('ngApp').controller("lineSmartCtrl", ['$scope', '$http','$q','$timeout','AuthenticationService','$state','$stateParams', '$sce' , function ($scope, $http, $q, $timeout, AuthenticationService, $state, $stateParams, $sce ) {
    

    $scope.type = ($state.params.type)  ?  $state.params.type : 'lineage_m';
    $scope.subType = ($state.params.subType)  ?  $state.params.subType : 'clan_recruit';

    $scope.typeName = null;
    $scope.subTypeName = null;

    $scope.myInfo = false;
    
    $scope.userInfo = null;
    $scope.characterInfo = null;
    
    $scope.serverList = null;
    $scope.serverCount = null;

    $scope.selectServerModel = null;

    $scope.init = function(){
        
        // 비로그인시 로그인 페이지 이동
        // AuthenticationService.checked(function(result){ 
            console.log('lineSmartCtrl');
        // });

        if($scope.type == 'lineage_m'){
            $scope.typeName = '리니지M';
        }else if($scope.type == 'lineage_2m'){
            $scope.typeName = '리니지2M';
        }else if($scope.type == 'lineage_w'){
            $scope.typeName = '리니지W';
        }else if($scope.type == 'trickster_m'){
            $scope.typeName = '트릭스터M';
        }else if($scope.type == 'odin'){
            $scope.typeName = '오딘:발할라라이징';
        }

        if($scope.subType == 'clan_recruit'){
            $scope.subTypeName = '혈원모집';
        }else if($scope.subType == 'server_info'){
            $scope.subTypeName = '서버정보';
        }else if($scope.subType == 'clan_info'){
            $scope.subTypeName = '혈맹정보';
        }
        
        $scope.getServerList();
        $scope.getUserInfo();
    }

    $scope.myInfoClick = function(){

        $scope.myInfo = !$scope.myInfo;
        console.log('$scope.myInfo : ', $scope.myInfo)

    }
    
    $scope.getUserInfo = function(){

        var params = $.param({
            user_pk             : $scope.NG_USER_ID,
            authorization       : $scope.NG_AUTHORIZATION,
            email               : $scope.NG_EMAIL,
        });
        console.log('$scope.NG_USER_ID ', $scope.NG_USER_ID);
        console.log('$scope.NG_AUTHORIZATION ', $scope.NG_AUTHORIZATION);

        $http.post(API_SERVER+'/user/get_user_info',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.userInfo = items.data.info;
                    $scope.characterInfo = items.data.info.character;
                    console.log('$scope.userInfo : ', $scope.userInfo);
                    console.log('$scope.characterInfo : ', $scope.characterInfo);

                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.itemsList = [];
                    $scope.totalCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

    
    $scope.getServerList = function(){

        console.log('$scope.type : ', $scope.type)


        var params = $.param({
            type           : $scope.type,
        });

        $http.post(API_SERVER+'/server/server_list',params)
            .then(function onSuccess(response)
            {
                var items = response.data;
                $scope.resCode = items.res_code;

                if($scope.resCode == 200){
                    
                    $scope.serverList = items.data.list;
                    $scope.serverCount = items.data.total_count;
                    
                    console.log('$scope.serverList : ', $scope.serverList);

                }else{
                
                    if($scope.resCode == 500){

                        $scope.resCode = items.data.err_code;
                        $scope.resMsg  = items.data.err_msg;
                    
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg  = items.msg;
                    }

                    alert($scope.resMsg);
                    $scope.itemsList = [];
                    $scope.totalCount = 0;
                }

            },
            function onError(response)
            {
                alert('정보를 불러오지 못했습니다.');
            }
        );
    }

    $scope.characterInfoModify = function(){

        var formData = new FormData();
        formData.append("user_pk", $scope.NG_USER_ID);
        formData.append("authorization", $scope.NG_AUTHORIZATION);
        formData.append("email", $scope.NG_EMAIL);
        formData.append("type", $scope.type);

        formData.append("clan_name", $('#clan_name').val());
        formData.append("job", $("select[name=job]").val());
        formData.append("defense", $('#defense').val());
        formData.append("level", $('#level').val());
        formData.append("change", $('#change').val());
        // formData.append("nickname", $('#nickname').val());

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: API_SERVER+'/character/character_modify',
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (response) {

                var items = response;
                $scope.resCode = items.res_code;
                if($scope.resCode == 200) {
                    
                    $scope.resMsg = items.msg;
                    alert('정보가 수정됐습니다');
                    
                }else{
                    
                    if($scope.resCode == 0900){
                        $scope.resMsg = items.data.errMsg;
                    }else{
                        $scope.resCode = $scope.resCode;
                        $scope.resMsg = items.msg;
                    }
                    
                    alert($scope.resMsg);
                    // $scope.itemsList = [];
                    // $scope.totalCount = 0;
                }

                $scope.myInfo = false;    

            },
            error: function () {

            }
        });

    }
    

    $scope.serverSelectChange = function(){
        
        console.log('aaa');
    }



}]);