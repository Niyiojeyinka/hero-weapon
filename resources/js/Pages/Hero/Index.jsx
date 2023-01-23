import React from "react";
import Table from "react-bootstrap/Table";
import { usePage, Head } from "@inertiajs/react";

export default function Index() {
    const { heroes } = usePage().props;
    return (
        <>
            <Head title="Weapons' Page" />
            <Table striped bordered hover size="sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Weapons</th>
                        <th>Damage</th>
                    </tr>
                </thead>
                <tbody>
                    {heroes.map((eachHeroes, index) => (
                        <tr key={index}>
                            <td>{index + 1}</td>
                            <td>{eachHeroes.name}</td>
                            <td>{eachHeroes.weapons_count}</td>
                            <td>{eachHeroes.weapons_sum_damage || 'no weapon'}</td>
                        </tr>
                    ))}
                </tbody>
            </Table>
        </>
    );
}
