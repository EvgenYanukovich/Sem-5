// 1. Создание промиса myPromise, который через 3 секунды генерирует случайное число
const myPromise = new Promise((resolve, reject) => {
    setTimeout(() => {
        const randomNumber = Math.random(); 
        resolve(randomNumber);
    }, 3000); 
});

myPromise.then((number) => {
    console.log(`Сгенерированное число (через 3 секунды): ${number}`);
});

// 2. Функция, принимающая параметр delay и возвращающая промис
function createPromise(delay) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const randomNumber = Math.random(); 
            resolve(randomNumber);
        }, delay);
    });
}

Promise.all([
    createPromise(1000), 
    createPromise(2000), 
    createPromise(3000)
]).then((numbers) => {
    console.log(`Все промисы выполнены, сгенерированные числа: ${numbers}`);
});

// 3. Вывод в консоль и почему
let pr = new Promise((res, rej) => {
    rej('ku');
});

pr.then(() => console.log(1))
  .catch(() => console.log(2))
  .catch(() => console.log(3)) 
  .then(() => console.log(4))  
  .then(() => console.log(5));  

// 4. Промис с результатом 21 и цепочка then
const promise = new Promise((resolve, reject) => {
    resolve(21); 
});

promise
    .then((result) => {
        console.log(result); 
        return result * 2;
    })
    .then((newResult) => {
        console.log(newResult); 
    });

// 5. Реализация предыдущей задачи с использованием async/await
async function processNumbers() {
    const result = await Promise.resolve(21); 
    console.log(result); 
    const newResult = result * 2;
    console.log(newResult); 
}

processNumbers();
