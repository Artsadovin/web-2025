const task = (a, b, c) => {
    let d = b * b - 4 * a * c;
    let x1 = Math.round((-b + Math.sqrt(d)) / 2 / a);
    let x2 = Math.round((-b - Math.sqrt(d)) / 2 / a);
    return [x1, x2];
}

const task2 = (n) => {
    if (n != 1) {
        for (d = 2; d < Math.sqrt(n); d++) {
            if (n % d == 0) {
                return false;
            }
        }
        return true;
    } else {
        return false;
    }
}

const task3 = (n) => {
    let arr = [];
    for (d = 2; d < n-1; d++) {
        if (n % d == 0) {
            arr.push(d);
        }
    }
    return arr;
}

const binSearch = (arr, n) => {
    let left = 0;
    let right = arr.length-1;
    let mid = left + Math.floor((right - left) / 2);
    while (right >= left) {
        if (arr[mid] < n) {
            left = mid + 1;
        } else if (arr[mid] > n) {
            right = mid - 1;
        } else {
            return mid
        }
        mid = Math.floor((left + right) / 2);
    }
    return -1;
}
console.log("x1,x2 =", task(1,5,-7)[0], ",", task(1,5,-7)[1]);
console.log("is prime: ", task2(991) ? "yes" : "no");
let divs = task3(12);
console.log("dividers: ", divs.length == 0 ? "no dividers" : divs);
let arr = [1,3,6,8,9,12,13,14];
console.log("arr = ", arr, ", n index in arr: ", binSearch(arr,1) == -1 ? "not found" : binSearch(arr,1));