// エレメント取得
var refineElement = document.getElementsByName("refine")[0];
var sortElement = document.getElementsByName("sort")[0];

/**
 * テキスト絞り込み処理
 * @param {string} refineValue 
 * @description 入力された値を含む行データのみ表示する。
 */
var refineTable = function () {
    var tBodyElements = document.querySelector("table#prefectures_data tbody");
    var trNodeArray = Array.prototype.slice.call(tBodyElements.children);
    trNodeArray.forEach(trElement => {
        // 行内の各列テキストをフィルターにかけ、入力値の有無でCSSを設定する。
        var tdNodeArray = Array.prototype.slice.call(trElement.children);
        var tdNodeArray = tdNodeArray.filter(tdNode => tdNode.innerText.includes(refineElement.value));
        var trStyleDisplay = tdNodeArray.length > 0 ?  "" : "none";
        trElement.setAttribute("style",`display:${trStyleDisplay}`);
    });
};

/**
 * 各項目のソート処理
 * @param {number} sortValue
 * @description 入力されたソート値を見て都道府県テーブルをソートする。
 */
var sendRequest = function () {
    window.location.href = `http://localhost:8888?refine=${refineElement.value}&sort=${sortElement.value}`;
}

// リスナー登録
window.addEventListener('load', refineTable);
refineElement.addEventListener('keyup', refineTable);
sortElement.addEventListener('change', sendRequest);