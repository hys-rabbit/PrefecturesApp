window.onload = function () {
    refine(document.getElementsByName("refine")[0].value);
}

/**
 * テキスト絞り込み処理
 * @param {string} refineValue 
 * @description 入力された値を含む行データのみ表示する。
 */
function refine (refineValue) {
    var prefectureList = Array.prototype.slice.call(document.querySelector("table#prefectures_data tbody").children);
    prefectureList.forEach(trElement => {
        // 行内の各列テキストをフィルターにかけ、入力値の有無でCSSを設定する。
        var trStyleDisplay = Array.prototype.slice.call(trElement.children).filter(e => e.innerText.includes(refineValue)).length > 0 ?  "" : "none";
        trElement.setAttribute("style",`display:${trStyleDisplay}`);
    });
}

/**
 * 各項目のソート処理
 * @param {number} sortValue
 * @description 入力されたソート値を見て都道府県テーブルをソートする。
 */
function sort (sortValue) {
    // 入力値を数値に変換する。
    var sortValueInt = Number(sortValue);

    // 入力値が未選択もしくは許容していない値の場合、
    // 画面を再描画してデフォルトに戻す。
    if (sortValueInt < 1 || 6 < sortValueInt) {
        window.location.reload();
    }

    var refine = document.getElementsByName("refine")[0].value;
    window.location.href = `http://localhost:8888?refine=${refine}&sort=${sortValue}`;
}