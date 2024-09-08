//Реализация на типах
var obj = {
    номер: 1,
    размер: 41,
    цвет: "черный",
    цена: 1000,
    afc: 12
};
var products = {
    Обувь: {
        Ботинки: [
            {
                номер: 1,
                размер: 41,
                цвет: "черный",
                цена: 1000
            },
            {
                номер: 2,
                размер: 40,
                цвет: "коричневый",
                цена: 1200
            }
        ],
        Кроссовки: [
            {
                номер: 3,
                размер: 39,
                цвет: "синий",
                цена: 800
            },
            {
                номер: 4,
                размер: 41,
                цвет: "черный",
                цена: 900
            }
        ],
        Сандали: [
            {
                номер: 5,
                размер: 38,
                цвет: "коричневый",
                цена: 600
            },
            {
                номер: 6,
                размер: 37,
                цвет: "белый",
                цена: 700
            }
        ]
    }
};
console.log(products['Обувь']['Ботинки'][0]);
// Задание 2
function Filter(minPrice, maxPrice, color, size) {
    var arrObjects = Object.keys(products['Обувь']).flatMap(function (key) { return products['Обувь'][key]; });
    return arrObjects
        .filter(function (shoe) { return shoe.цена >= minPrice && shoe.цена <= maxPrice && shoe.размер === size && shoe.цвет === color; })
        .map(function (shoe) { return shoe.номер; });
}
console.log(Filter(800, 1200, 'черный', 41));
var newProducts = {
    Обувь: {
        Ботинки: [
            {
                номер: 1,
                размер: 42,
                цвет: "черный",
                скидка: 0.1,
                стоимость: 900
            },
            {
                номер: 2,
                размер: 40,
                цвет: "коричневый",
                скидка: 0.2,
                стоимость: 960
            }
        ],
        Кроссовки: [
            {
                номер: 3,
                размер: 39,
                цвет: "синий",
                скидка: 0.15,
                стоимость: 680
            },
            {
                номер: 4,
                размер: 41,
                цвет: "черный",
                скидка: 0.1,
                стоимость: 810
            }
        ],
        Сандалии: [
            {
                номер: 5,
                размер: 38,
                цвет: "коричневый",
                скидка: 0.2,
                стоимость: 480
            },
            {
                номер: 6,
                размер: 37,
                цвет: "белый",
                скидка: 0.1,
                стоимость: 630
            }
        ]
    }
};
for (var category in newProducts['Обувь']) {
    for (var _i = 0, _a = newProducts['Обувь'][category]; _i < _a.length; _i++) {
        var shoe = _a[_i];
        Object.defineProperties(shoe, {
            'цена': {
                get: function () {
                    return this['стоимость'] * (1 - this['скидка']);
                },
                configurable: false
            },
            'номер': {
                writable: false,
                enumerable: true,
                configurable: false
            }
        });
    }
}
console.log(newProducts['Обувь']['Ботинки'][0]['цена']);
// Задание 5-6
function Shoe(number, size, color, discount, cost) {
    this['номер'] = number;
    this['размер'] = size;
    this['цвет'] = color;
    this['скидка'] = discount;
    this['стоимость'] = cost;
    Object.defineProperties(this, {
        'цена': {
            get: function () {
                return this['стоимость'] * (1 - this['скидка']);
            },
            configurable: false
        },
        'номер': {
            writable: false,
            enumerable: true,
            configurable: false
        }
    });
}
var allProducts = {
    Обувь: {
        Ботинки: [
            new Shoe(1, 42, "черный", 0.1, 900),
            new Shoe(2, 40, "коричневый", 0.2, 960)
        ],
        Кроссовки: [
            new Shoe(3, 39, "синий", 0.15, 680),
            new Shoe(4, 41, "черный", 0.1, 810)
        ],
        Сандалии: [
            new Shoe(5, 38, "коричневый", 0.2, 480),
            new Shoe(6, 37, "белый", 0.1, 630)
        ]
    }
};
console.log(allProducts);
//Реализация на интерфейсах
////Задание 1
//interface Product {
//    номер: number;
//    размер: number;
//    цвет: string;
//    цена: number;
//}
//
//interface Category {
//    [key: string]: Product[];
//}
//
//interface Products {
//    Обувь: Category;
//}
//
//let products: Products = {
//    "Обувь": {
//        "Ботинки": [
//            {
//                "номер": 1,
//                "размер": 41,
//                "цвет": "черный",
//                "цена": 1000
//            },
//            {
//                "номер": 2,
//                "размер": 40,
//                "цвет": "коричневый",
//                "цена": 1200
//            }
//        ],
//        "Кроссовки": [
//            {
//                "номер": 3,
//                "размер": 39,
//                "цвет": "синий",
//                "цена": 800
//            },
//            {
//                "номер": 4,
//                "размер": 41,
//                "цвет": "черный",
//                "цена": 900
//            }
//        ],
//        "Сандали": [
//            {
//                "номер": 5,
//                "размер": 38,
//                "цвет": "коричневый",
//                "цена": 600
//            },
//            {
//                "номер": 6,
//                "размер": 37,
//                "цвет": "белый",
//                "цена": 700
//            }
//        ]
//    }
//};
//
//console.log(products['Обувь']['Ботинки'][0]);
//
////Задание 2
//function Filter(minPrice: number, maxPrice: number, color: string, size: number): number[] {
//    let arrObjects: Product[] = Object.keys(products['Обувь']).flatMap(key => products['Обувь'][key]);
//
//    return arrObjects.filter(product =>
//        product['цена'] >= minPrice &&
//        product['цена'] <= maxPrice &&
//        product['размер'] === size &&
//        product['цвет'] === color
//    ).map(product => product['номер']);
//}
//
//console.log(Filter(800, 1200, 'черный', 41));
//
////Задание 3-4
//interface DiscountedProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    цена?: number;
//    скидка: number;
//    стоимость: number;
//}
//
//interface NewCategory {
//    [key: string]: DiscountedProduct[];
//}
//
//interface NewProducts {
//    Обувь: NewCategory;
//}
//
//let newProducts: NewProducts = {
//    "Обувь": {
//        "Ботинки": [
//            {
//                "номер": 1,
//                "размер": 42,
//                "цвет": "черный",
//                "скидка": 0.1,
//                "стоимость": 900
//            },
//            {
//                "номер": 2,
//                "размер": 40,
//                "цвет": "коричневый",
//                "скидка": 0.2,
//                "стоимость": 960
//            }
//        ],
//        "Кроссовки": [
//            {
//                "номер": 3,
//                "размер": 39,
//                "цвет": "синий",
//                "скидка": 0.15,
//                "стоимость": 680
//            },
//            {
//                "номер": 4,
//                "размер": 41,
//                "цвет": "черный",
//                "скидка": 0.1,
//                "стоимость": 810
//            }
//        ],
//        "Сандалии": [
//            {
//                "номер": 5,
//                "размер": 38,
//                "цвет": "коричневый",
//                "скидка": 0.2,
//                "стоимость": 480
//            },
//            {
//                "номер": 6,
//                "размер": 37,
//                "цвет": "белый",
//                "скидка": 0.1,
//                "стоимость": 630
//            }
//        ]
//    }
//};
//
//for (let category in newProducts['Обувь']) {
//    for (let shoe of newProducts['Обувь'][category]) {
//        Object.defineProperties(shoe, {
//            'цена': {
//                get() {
//                    return this['стоимость'] * (1 - this['скидка']);
//                },
//                configurable: false
//            },
//            'номер': {
//                writable: false,
//                enumerable: true,
//                configurable: false
//            }
//        });
//    }
//}
//
//console.log(newProducts['Обувь']['Ботинки'][0]['цена']);
//
////Задание 5-6
//interface LastProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    скидка: number;
//    стоимость: number;
//    readonly цена: number;
//}
//
//interface LastCategory {
//    [key: string]: LastProduct[];
//}
//
//interface AllProducts {
//    Обувь: LastCategory;
//}
//
//class Shoe implements LastProduct {
//    номер: number;
//    размер: number;
//    цвет: string;
//    скидка: number;
//    стоимость: number;
//
//    constructor(number: number, size: number, color: string, discount: number, cost: number) {
//        this.номер = number;
//        this.размер = size;
//        this.цвет = color;
//        this.скидка = discount;
//        this.стоимость = cost;
//    }
//
//    get цена(): number {
//        return this.стоимость * (1 - this.скидка);
//    }
//}
//
//
//let allProducts: AllProducts = {
//    "Обувь": {
//        "Ботинки": [
//            new Shoe(1, 42, "черный", 0.1, 900),
//            new Shoe(2, 40, "коричневый", 0.2, 960)
//        ],
//        "Кроссовки": [
//            new Shoe(3, 39, "синий", 0.15, 680),
//            new Shoe(4, 41, "черный", 0.1, 810)
//        ],
//        "Сандалии": [
//            new Shoe(5, 38, "коричневый", 0.2, 480),
//            new Shoe(6, 37, "белый", 0.1, 630)
//        ]
//    }
//};
//
//console.log(allProducts);
//
