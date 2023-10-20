export interface Movie {
    id?:number;
    title?: string;
    year?: string;
    synopsis?: string;
    cover?:string;
    created_at?:Date;
    updated_at?: Date;
}