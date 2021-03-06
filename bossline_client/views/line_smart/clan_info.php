


<div class="clan-info" ng-controller="clanInfoCtrl" ng-init="init()" ng-if="subType=='clan_info'">
    <div class="clan-info-section">
        <dl class="info-item is-highlight">
        <dt>모집중</dt>
        <dd>
            <label class="checkbox">
            <input type="radio" name="recruit_yn" value="Y" ng-checked="clanInfo.recruit_yn == 'Y'"  />
            <span class="checkbox-text">ON</span>
            </label>
            <label class="checkbox">
            <input type="radio" name="recruit_yn" value="N" ng-checked="clanInfo.recruit_yn == 'N'" />
            <span class="checkbox-text">OFF</span>
            </label>
        </dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">서버</dt>
            <!-- <dd>오필리아</dd> -->
            <span class="select">
                <select name="server">
                    <option ng-repeat="it in serverList track by $index" value="{{it.id}}" ng-selected="clanInfo.server == it.id">
                        {{it.name}}
                    </option>
                </select>
            </span>
        </dl>
        <dl class="info-item">
            <dt class="info-active">혈맹명</dt>
            <dd><input id="clan_name" class="input-form" type="text" placeholder="혈맹명" ng-value="clanInfo.clan_name"></dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">혈레벨</dt>
            <dd><input id="clan_level" class="input-form" type="number" placeholder="혈레벨" ng-value="clanInfo.clan_level"></dd>
        </dl>
        <dl class="info-item">
            <dt class="info-active">모집 클래스</dt>
            <dd>
                <span class="stat-item">
                <span class="stat-item-icon">
                    <img src="./assets/img/icon_info-card05.png" alt="" />
                </span>
                <span>직업</span>
                <span class="select">
                    <select name="job">
                        <option value="1" ng-selected="clanInfo.job == '1'" >기사</option>
                        <option value="2" ng-selected="clanInfo.job == '2'" >요정</option>
                        <option value="3" ng-selected="clanInfo.job == '3'" >군주</option>
                        <option value="4" ng-selected="clanInfo.job == '4'" >마법사</option>
                    </select>
                </span>
                </span>
            </dd>
        </dl>
        
        <dl class="info-item">
            <dt class="info-active">모집상태</dt>
            <dd>
                <span class="stat-item">
                <span class="select">
                    <select name="recruit_type">
                        <option value="world"  ng-selected="clanInfo.recruit_type == 'world'">월드</option>
                        <option value="line"   ng-selected="clanInfo.recruit_type == 'line'">라인</option>
                        <option value="normal" ng-selected="clanInfo.recruit_type == 'normal'">중립</option>
                    </select>
                </span>
                </span>
            </dd>
        </dl>

        <dl class="info-item">
            <dt class="info-active">가입스펙</dt>
            <dd>
                <span class="stat-item">
                <span class="stat-item-icon">
                    <img src="./assets/img/icon_stat-item01.png" alt="" />
                </span>
                <span>방어</span>
                <span>
                    <input type="number" id="defense" class="input-form2" placeholder="" ng-value="clanInfo.defense">
                </span>
                <span class="stat-item-arrow">
                    <img src="./assets/img/icon_arrow-up.png" alt="상승" />
                </span>
                </span>
                <span class="stat-item">
                <span class="stat-item-icon">
                    <img src="./assets/img/icon_info-card03.png" alt="" />
                </span>
                <span>레벨</span>
                <span>
                    <input type="number" id="level" class="input-form2" placeholder="" ng-value="clanInfo.level">
                </span>
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
        <!-- <p>
            현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다. 현재 오필리아 아덴 3연속 수성중인
            혈입니다. 현재 오필리아 아덴 3연속 수성중인 혈입니다. 현재
            오필리아 아덴 3연속 수성중인 혈입니다. 현재 오필리아 아덴
            3연속 수성중인 혈입니다.
        </p> -->
        <textarea id="description" cols="120" rows="10" class="input-area" >{{ clanInfo.description }}</textarea>
        </div>
    </div>
    <div class="clan-info-section">
        <h3 class="clan-info-title">혈가 & 분배</h3>
        <div class="clan-info-text">
        <!-- <p>
            영웅템 - 전서버 최저가 50%
            <br />
            혼 - 뽑기z
        </p> -->
        <textarea id="welfare" cols="120" rows="10" class="input-area"> {{ clanInfo.welfare }} </textarea>

        </div>
    </div>
    <div class="clan-info-btn">
        <button type="button" ng-click="insertClanButton()" class="btn btn-confirm" ng-if="clanInfo == null">혈맹추가</button>
        <button type="button" ng-click="insertClanButton()" class="btn btn-confirm" ng-if="clanInfo != null">혈맹수정</button>
        <!-- <button type="button" class="btn btn-confirm">가입요청</button> -->
    </div>
</div>
