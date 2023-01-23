import React from "react";
import Table from "react-bootstrap/Table";
import { usePage, Head } from "@inertiajs/react";

export default function Index() {
    const { weapons } = usePage().props;

    return (
        <>
            <Head title="Weapons' Page" />
            <Table striped bordered hover size="sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>No of Heroes</th>
                    </tr>
                </thead>
                <tbody>
                    {weapons.map((eachweapon, index) => (
                        <tr key={index}>
                            <td>{index + 1}</td>
                            <td>{eachweapon.name}</td>
                            <td>{eachweapon.heroes_count}</td>
                        </tr>
                    ))}
                </tbody>
            </Table>
        </>
    );
}
