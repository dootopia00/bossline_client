

<nav class="gnb" ng-if="nowHashUrl != 'main'">
    <div class="gnb-row">
        <a href="javascript:void(0);" ng-click="pageMovement('main')" class="gnb-logo">
        <img src="/assets/img/img_bi.png" alt="BOSS LINE" />
        </a>
        <div class="gnb-menu">
            <a href="javascript:void(0);" ng-click="pageMovement('botam_smart')" ng-class="{'is-active' : nowHashUrl == 'botam_smart'}">보탐스마트</a>
            <a href="javascript:void(0);" ng-click="pageMovement('line_smart', {type:'lineage_w'})"  ng-class="{'is-active' : nowHashUrl == 'line_smart'}">라인스마트</a>
        </div>
        <span class="gnb-line"></span>
        <div id='mypage' class="gnb-auth">
            <a ng-click="kakaoLogin()" href="javascript:void(0);" ng-if="NG_USER_ID == ''">로그인</a>
            <a ng-click="pageMovement('my_page')" href="javascript:void(0);" ng-if="NG_USER_ID != ''">마이페이지</a>
        </div>
    </div>
</nav>

