//Задание 1
function createPhoneNumber(numbers: number[]): string {
    if (numbers.length !== 10) {
        throw new Error("Массив состоит не из 10 цифр");
    }
    const areaCode = numbers.slice(0, 3).join('');
    const centralOfficeCode = numbers.slice(3, 6).join('');
    const lineNumber = numbers.slice(6, 10).join('');
    return `(${areaCode}) ${centralOfficeCode}-${lineNumber}`;
}

console.log(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]));

//Задание 2
class Challenge {
    static solution(number: number): number {
        if (number < 0) return 0;
        let sum = 0;
        for (let i = 0; i < number; i++) {
            if (i % 3 === 0 || i % 5 === 0) {
                sum += i;
            }
        }
        return sum;
    }
}

console.log(Challenge.solution(15));

//Задание 3
function rotateArray(nums: number[], k: number): number[] {
    const n = nums.length;
    k = k % n;
    return nums.slice(-k).concat(nums.slice(0, n - k));
}

console.log(rotateArray([1, 2, 3, 4, 5, 6, 7], 9));

//Задание 4
function findMedianSortedArrays(nums1: number[], nums2: number[]): number {
    const merged = nums1.concat(nums2).sort((a, b) => a - b);
    const len = merged.length;
    if (len % 2 === 0) {
        return (merged[len / 2 - 1] + merged[len / 2]) / 2;
    } else {
        return merged[Math.floor(len / 2)];
    }
}

console.log(findMedianSortedArrays([1, 3], [2])); // 2.0
console.log(findMedianSortedArrays([1, 2], [3, 4])); // 2.5


