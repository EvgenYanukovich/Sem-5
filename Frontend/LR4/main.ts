//1
interface Student {
    id: number;
    name: string;
    group: number;
}

const array: Student[] = [
    { id: 1, name: 'Vasya', group: 10 },
    { id: 2, name: 'Ivan', group: 11 },
    { id: 3, name: 'Masha', group: 12 },
    { id: 4, name: 'Petya', group: 10 },
    { id: 5, name: 'Kira', group: 11 }
];

//2
interface CarsType {
    manufacturer?: string;
    model?: string;
}

let car: CarsType = {
    manufacturer: "manufacturer",
    model: "model"
};

//3
interface ArrayCarsType {
    cars: CarsType[];
}

const car9: CarsType = {}

const car1: CarsType = {
    manufacturer: "manufacturer",
    model: "model"
};

const car2: CarsType = {
    manufacturer: "manufacturer",
    model: "model"
};

const arrayCars: ArrayCarsType[] = [
    {
        cars: [car1, car2]
    }
];

//4
type MarkFilterType = 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10;
type DoneType = boolean;
type GroupFilterType = 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 | 11 | 12;

type MarkType = {
    subject: string;
    mark: MarkFilterType;
    done: DoneType;
};

type StudentType = {
    id: number;
    name: string;
    group: GroupFilterType;
    marks: MarkType[];
};

type GroupType = {
    students: StudentType[];
    studentsFilter: (group: number) => StudentType[];
    marksFilter: (mark: number) => StudentType[];
    deleteStudent: (id: number) => void;
    mark: MarkFilterType;
    group: GroupFilterType;
};

const group: GroupType = {
    students: [],
    studentsFilter: function (groupNumber: number): StudentType[] {
        return this.students.filter(student => student.group === groupNumber);
    },
    marksFilter: function (markNumber: number): StudentType[] {
        return this.students.filter(student =>
            student.marks.some(mark => mark.mark === markNumber)
        );
    },
    deleteStudent: function (id: number): void {
        this.students = this.students.filter(student => student.id !== id);
    },
    mark: 10,
    group: 12
};
