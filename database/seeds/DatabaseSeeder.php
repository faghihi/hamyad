<?php



use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {



        $this->call(RoleSeed::class);

        $this->call(UserSeed::class);

        $this->call(r_CategorysSeed::class);
        $this->call(Review::class);

        $this->call(r_CoursesSeed::class);

        $this->call(h_SectionSeed::class);
        $this->call(h_TagsSeed::class);
        $this->call(h_TeachersSeed::class);

        $this->call(UserActionSeed::class);

        $this->call(h_SectionRateSeed::class);
        $this->call(h_SectionReviewSeed::class);
        $this->call(h_TeacherRateSeed::class);


        $this->call(h_TakeSeed::class);
        $this->call(r_CategoryTagSeed::class);
        $this->call(r_CertificateSeed::class);
        $this->call(r_CourseOwnerSeed::class);
        $this->call(r_CourseRateSeed::class);
        $this->call(r_CourseReviewSeed::class);
        $this->call(r_CourseTagSeed::class);
        $this->call(r_CourseTeacherSeed::class);
        $this->call(r_FavoriteSectionsSeed::class);
        $this->call(r_PacksSeed::class);
        $this->call(TakePack::class);
        $this->call(ProvidersSeeder::class);
        $this->call(Provider_coursesSeeder::class);
        $this->call(DiscountSeeder::class);
        $this->call(Pack_courses_Seeder::class);
    }

}