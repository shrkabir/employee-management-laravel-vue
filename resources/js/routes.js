import EmployeeIndex from './components/Employee/Index'
import EmployeeCreate from './components/Employee/Create'
import EmployeeEdit from './components/Employee/Edit'

export const routes= [
    {
        path: '/employees',
        name: 'employee-index',
        component: EmployeeIndex
    },
    {
        path: '/employees/create',
        name: 'employee-create',
        component: EmployeeCreate
    },
    {
        path: '/employees/:id/edit',
        name: 'employee-edit',
        component: EmployeeEdit
    }
];