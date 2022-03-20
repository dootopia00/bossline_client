<div class="content" ng-if="subType=='clan_info'">
    <div class="breadcrumb">
    <a href="javascript:void(0);">홈</a>
    <a href="javascript:void(0);">중분류</a>
    <a href="javascript:void(0);">하분류</a>
    </div>

    <header class="title-group is-reverse">
    <div class="title-group-col col-auto">
        <h2 class="title-group-text">
        <span>
            <em>{{ typeName }}</em>
            혈맹정보
        </span>
        </h2>
    </div>
    <div class="title-group-col">
        <!--MEMO: is-open 클래스명 추가 시 하위 콘텐츠가 열립니다. -->
        <div class="info-card js-info-card-container">
        <div class="info-card-header">
            <h3>
            <img src="./assets/img/img_premium.png" alt="PREMIUM" />
            </h3>
            <button type="button" class="info-card-btn">
            <img src="./assets/img/icon_pencil.png" alt="수정" />
            </button>
            <button type="button" class="info-card-btn">
            <img src="./assets/img/icon_enter.png" alt="확인" />
            </button>
        </div>
        <div class="info-card-body">
            <strong class="game-id">
            IDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDIDID
            </strong>
            <dl>
            <dt>
                <span class="icon">
                <img src="./assets/img/icon_info-card01.png" alt="" />
                </span>
                <span>혈맹</span>
            </dt>
            <!--MEMO: readonly 속성 삭제 시 입력 가능한 상태가 됩니다.-->
            <dd><input type="text" value="귀족" readonly /></dd>
            </dl>
            <dl>
            <dt>
                <span class="icon">
                <img src="./assets/img/icon_info-card02.png" alt="" />
                </span>
                <span>방어</span>
            </dt>
            <dd><input type="text" value="210" /></dd>
            </dl>
            <dl>
            <dt>
                <span class="icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
                </span>
                <span>레벨</span>
            </dt>
            <dd><input type="text" value="65" readonly /></dd>
            </dl>
            <dl>
            <dt>
                <span class="icon">
                <img src="./assets/img/icon_info-card04.png" alt="" />
                </span>
                <span>변신</span>
            </dt>
            <dd><input type="text" value="쿠막" /></dd>
            </dl>
            <dl>
            <dt>
                <span class="icon">
                <img src="./assets/img/icon_info-card05.png" alt="" />
                </span>
                <span>직업</span>
            </dt>
            <dd><input type="text" value="기사" /></dd>
            </dl>
        </div>
        <div class="info-card-bottom">
            <button
            type="button"
            class="info-card-btn js-info-card-toggle"
            >
            <img
                src="./assets/img/icon_arrow-bottom.png"
                alt="열기/닫기"
            />
            </button>
        </div>
        </div>
    </div>
    </header>

    <div class="clan-info">
    <div class="clan-info-section">
        <dl class="info-item is-highlight">
        <dt>모집중</dt>
        <dd>
            <label class="checkbox">
            <input type="radio" name="aaaaa" checked />
            <span class="checkbox-text">ON</span>
            </label>
            <label class="checkbox">
            <input type="radio" name="aaaaa" />
            <span class="checkbox-text">OFF</span>
            </label>
        </dd>
        </dl>
        <dl class="info-item">
        <dt>서버</dt>
        <dd>오필리아</dd>
        </dl>
        <dl class="info-item">
        <dt>혈맹명</dt>
        <dd>가즈아</dd>
        </dl>
        <dl class="info-item">
        <dt>혈레벨</dt>
        <dd>10</dd>
        </dl>
        <dl class="info-item">
        <dt>모집 클래스</dt>
        <dd>
            <span class="stat-item">
            <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card05.png" alt="" />
            </span>
            <span>직업</span>
            <span>기사</span>
            </span>
        </dd>
        </dl>
        <dl class="info-item">
        <dt>가입스펙</dt>
        <dd>
            <span class="stat-item">
            <span class="stat-item-icon">
                <img src="./assets/img/icon_stat-item01.png" alt="" />
            </span>
            <span>방어</span>
            <span>210</span>
            <span class="stat-item-arrow">
                <img src="./assets/img/icon_arrow-up.png" alt="상승" />
            </span>
            </span>
            <span class="stat-item">
            <span class="stat-item-icon">
                <img src="./assets/img/icon_info-card03.png" alt="" />
            </span>
            <span>레벨</span>
            <span>210</span>
            <span class="stat-item-arrow">
                <img src="./assets/img/icon_arrow-up.png" alt="상승" />
            </span>
            </span>
        </dd>
        </dl>
    </div>
    <div class="clan-info-section">
        <h3 class="clan-info-title">소개</h3>
        <div class="clan-info-text">
        <p>
            현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다. 현재 오필리아 아덴 3연속 수성중인
            혈입니다. 현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재
            오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다.
        </p>
        </div>
    </div>
    <div class="clan-info-section">
        <h3 class="clan-info-title">혈가 & 분배</h3>
        <div class="clan-info-text">
        <p>
            영웅템 - 전서버 최저가 50%
            <br />
            혼 - 뽑기
        </p>
        </div>
    </div>
    <div class="clan-info-btn">
        <button type="button" class="btn btn-confirm">가입요청</button>
    </div>
    </div>
</div>