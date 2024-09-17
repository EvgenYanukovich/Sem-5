var array = [
    { id: 1, name: 'Vasya', group: 10 },
    { id: 2, name: 'Ivan', group: 11 },
    { id: 3, name: 'Masha', group: 12 },
    { id: 4, name: 'Petya', group: 10 },
    { id: 5, name: 'Kira', group: 11 }
];
var car = {
    manufacturer: "manufacturer",
    model: "model"
};
var car9 = {};
var car1 = {
    manufacturer: "manufacturer",
    model: "model"
};
var car2 = {
    manufacturer: "manufacturer",
    model: "model"
};
var arrayCars = [
    {
        cars: [car1, car2]
    }
];
var group = {
    students: [],
    studentsFilter: function (groupNumber) {
        return this.students.filter(function (student) { return student.group === groupNumber; });
    },
    marksFilter: function (markNumber) {
        return this.students.filter(function (student) {
            return student.marks.some(function (mark) { return mark.mark === markNumber; });
        });
    },
    deleteStudent: function (id) {
        this.students = this.students.filter(function (student) { return student.id !== id; });
    },
    mark: 10,
    group: 12
};
